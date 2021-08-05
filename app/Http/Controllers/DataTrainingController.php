<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Kategori;
use App\Sentimen;
use App\Stopwords;
use Auth;
use App\Imports\RawSentimenImport;
use App\Imports\StopwordsImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use Hash;
use App\Imports\DataTrainingImport;

class DataTrainingController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }
    public function index()
    {
        $kategori = Kategori::all();
        $sentimen = Sentimen::all();
        return view('administrator.content.data-training', compact('sentimen', 'kategori'));
    }

    public function store(Request $request)
    {

        $sentimen = new Sentimen();
        $sentimen->sentimen = $request->sentimen;
        $sentimen->twitter_account = $request->twitter_account;
        $sentimen->tgl_waktu = $request->tgl_waktu;
        $sentimen->kategori_id = $request->kategori_id;

        $sentimen->save();

        if ($sentimen) {
            return redirect("/admin/data-training")->with('success', 'Data Training Berhasil Ditambahkan!');
        } else {
            return redirect("/admin/data-training")->with('error', 'Data Training Gagal Ditambahkan');
        }
    }

    public function edit($id)
    {
        $sentimen = Sentimen::find($id);
        $kategori = Kategori::all();
        $tgl = date('Y-m-d', strtotime($sentimen->tgl_waktu));
        $waktu = date('H:i', strtotime($sentimen->tgl_waktu));
        $tgl_waktu = $tgl . "T" . $waktu;
        // dd($tgl_waktu);
        return view('administrator.content.edit-data-training', compact('kategori', 'sentimen', 'tgl_waktu'));
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

        Sentimen::where('id', $id)->update($update);

        return redirect('/admin/data-training')->with('success', 'Data Training berhasil diubah!');
    }

    public function delete($id)
    {
        $delete = Sentimen::find($id);
        $delete->delete();
        return redirect('/admin/data-training')->with('status', 'Data Training Berhasil Dihapus!');
    }

    public function import(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_stopwords di dalam folder public
        $file->move('file_datatraining', $nama_file);

        // import data
        Excel::import(new DataTrainingImport, public_path('/file_datatraining/' . $nama_file));

        // notifikasi dengan session
        Session::flash('sukses', 'Data Training Berhasil Diimport!');

        // alihkan halaman kembali
        return redirect('/admin/data-training');
    }
}
