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
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use Hash;
use App\Singkatan;

class KataSingkatanController extends Controller
{
    public function index(){
        $singkatan = Singkatan::all();
        return view('administrator.content.singkatan', compact('singkatan'));
    }
    public function import(Request $request){
        
        // validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_stopwords di dalam folder public
		$file->move('file_singkatan',$nama_file);
 
		// import data
		Excel::import(new SingkatanImport, public_path('/file_singkatan/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Singkatan Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/admin/singkatan');
	}
}
