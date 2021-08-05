<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Kategori;
use App\Sentimen;
use App\Stopwords;
use App\RawSentimen;
use Auth;
use App\Imports\RawSentimenImport;
use App\Imports\StopwordsImport;
use GuzzleHttp\Exception\GuzzleException;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;
use Hash;

class DataTestingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kategori = Kategori::all();
        $raw_sentimen = RawSentimen::all();
        return view('administrator.content.data-testing', compact('raw_sentimen', 'kategori'));
    }

    public function predict(Request $request)
    {
        $raw_sentimen = new RawSentimen();
        $raw_sentimen->sentimen = $request->sentimen;
        $raw_sentimen->twitter_account = $request->twitter_account;
        $raw_sentimen->tgl_waktu = $request->tgl_waktu;

        $client = new \GuzzleHttp\Client();
        $request = $client->request('POST', 'https://e-sentymentanalysis.herokuapp.com/predict', [
            'multipart' => [
                [
                    'name'     => 'text',
                    'contents' => $request->sentimen
                ]
            ]
        ]);

        $response = $request->getBody()->getContents();
        $res = json_decode($response);

        // dd($res->data->prediksi);

        $raw_sentimen->predict_kategori = $res->data->prediksi;

        $raw_sentimen->save();

        if ($raw_sentimen) {
            return redirect("/admin/data-testing")->with('success', 'Data Testing Berhasil Ditambahkan!');
        } else {
            return redirect("/admin/data-testing")->with('error', 'Data Testing Gagal Ditambahkan');
        }
    }

    public function edit($id)
    {
        $raw_sentimen = RawSentimen::find($id);
        $kategori = Kategori::all();
        $tgl = date('Y-m-d', strtotime($raw_sentimen->tgl_waktu));
        $waktu = date('H:i', strtotime($raw_sentimen->tgl_waktu));
        $tgl_waktu = $tgl . "T" . $waktu;
        // dd($tgl_waktu);
        return view('administrator.content.edit-data-testing', compact('kategori', 'raw_sentimen', 'tgl_waktu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'sentimen' => 'required',
            'twitter_account' => 'required',
            'tgl_waktu' => 'required',
            'kategori_id' => 'required',
        ]);
        $update = [
            'sentimen' => $request->sentimen,
            'twitter_account' => $request->twitter_account,
            'tgl_waktu' => $request->tgl_waktu,
            'kategori_id' => $request->kategori_id,
        ];

        $update['sentimen'] = $request->get('sentimen');
        $update['twitter_account'] = $request->get('twitter_account');
        $update['tgl_waktu'] = $request->get('tgl_waktu');
        $update['kategori_id'] = $request->get('kategori_id');

        RawSentimen::where('id', $id)->update($update);

        return redirect('/admin/data-testing')->with('success', 'Data Testing berhasil diubah!');
    }

    public function delete($id)
    {
        $delete = RawSentimen::find($id);
        $delete->delete();
        return redirect('/admin/data-testing')->with('status', 'Data Testing Berhasil Dihapus!');
    }
}
