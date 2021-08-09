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

class UmumController extends Controller
{
    public function welcome()
    {
        $kategori = Kategori::all();
        $sentimen = Sentimen::all();

        //Donut Chart Data Training
        $positif = Sentimen::where('kategori_id', '1')->get();
        $positifCount = $positif->count();
        $negatif = Sentimen::where('kategori_id', '2')->get();
        $negatifCount = $negatif->count();

        //Donut Chart Data Testing
        $positif_test = RawSentimen::where('predict_kategori', '1')->get();
        $positif_test_count = $positif_test->count();

        $negatif_test = RawSentimen::where('predict_kategori', '2')->get();
        $negatif_test_count = $negatif_test->count();

        return view('welcome', compact('sentimen', 'kategori', 'positifCount', 'negatifCount', 'positif_test_count', 'negatif_test_count'));
    }

    public function predict(Request $request)
    {
        $raw_sentimen = new RawSentimen();
        $raw_sentimen->sentimen = $request->sentimen;
        $raw_sentimen->twitter_account = $request->email;
        $raw_sentimen->tgl_waktu = $request->tgl_waktu;
        $raw_sentimen->kategori_id = $request->kategori_id;

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
}
