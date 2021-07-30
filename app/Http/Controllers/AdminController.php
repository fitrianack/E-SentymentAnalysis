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

class AdminController extends Controller
{
    public function __construct() {

    $this->middleware('auth');

    }

    public function dashboard(){

        $sentimen = Sentimen::count();

        $positif = Sentimen::where('kategori_id', '1')->get();
        $positifCount = $positif->count();

        $negatif = Sentimen::where('kategori_id', '2')->get();
        $negatifCount = $negatif->count();
        
        return view ('administrator.content.index', compact('positifCount', 'negatifCount', 'sentimen'));
    }

    public function profil(){
        return view('administrator.content.profil');
    }

    public function edit_profil(){
        return view('administrator.content.edit-profil');
    }

    public function update_profil(Request $request, $id) {
        
        if($request->hasFile('gambar')){
            $resorce = $request->file('gambar');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/gambar-user/", $name);
            DB::table('users')->where('id', Auth::user()->id )->update(
                [
                    'name' => $request->name,
                    'alamat'=>$request->alamat,
                    'email' => $request->email,
                    'gambar' => $name
                ]);
            return redirect('/admin/profil')->with('statusSuccess1', 'Data Berhasil Di Update');
        }else{

            DB::table('users')->where('id', Auth::user()->id )->update(
                [
                    'name' => $request->name,
                    'alamat'=>$request->alamat,
                    'email' => $request->email,
                    'gambar' => $request->oldGambar
                ]);
        return redirect()->route('user.profile', $id) ->with('statusSuccess2', 'Data Berhasil Di Update');
        }
    }

    public function ubah_password(){
        $id = Auth::user()->id;
        $admin = DB::table('users')->where('id', $id)->first();
        return view('administrator.content.ubah-password', compact('admin'));
    }

    public function updatePw(Request $request, $id)
     {
         $newPassword = $request->newPassword;
         if ($newPassword === $request->confirmPassword) {
             DB::table('users')->where('id', $id)->update([
                 'password' => Hash::make($request->newPassword),
             ]);
             return redirect()->back()->with("success", "Berhasil Ganti Password");
         } else {
            return redirect()->back()->with("failedpassword", "Gagal Ganti Password");
         }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
