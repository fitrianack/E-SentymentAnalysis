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

class StopwordsController extends Controller
{
    public function __construct() {

    $this->middleware('auth');

    }

    public function stopwords(){
        $stopwords = Stopwords::all();
        return view('administrator.content.stopwords', compact('stopwords'));
    }

    public function import_stopwords(Request $request){
        
        // validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_stopwords di dalam folder public
		$file->move('file_stopwords',$nama_file);
 
		// import data
		Excel::import(new StopwordsImport, public_path('/file_stopwords/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Stopwords Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/admin/stopwords');
	}
}
