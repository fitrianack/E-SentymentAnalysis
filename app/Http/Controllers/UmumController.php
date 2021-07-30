<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Sentimen;
use App\Stopwords;

class UmumController extends Controller
{
    public function welcome(){
        $kategori = Kategori::all();
        $sentimen = Sentimen::all();

        $positif = Sentimen::where('kategori_id', '1')->get();
        $positifCount = $positif->count();

        $negatif = Sentimen::where('kategori_id', '2')->get();
        $negatifCount = $negatif->count();
        
        return view ('welcome', compact('sentimen', 'kategori', 'positifCount', 'negatifCount'));
    }
}
