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

class VisualisasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function visualisasi()
    {
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

        //Line Chart Data Training
        $april_positif = Sentimen::whereMonth('tgl_waktu', '=', 4)->where('kategori_id', '1')->get();
        $april_positif_count = $april_positif->count();


        $mei_positif = Sentimen::whereMonth('tgl_waktu', '=', 5)->where('kategori_id', '1')->get();
        $mei_positif_count = $mei_positif->count();

        $juni_positif = Sentimen::whereMonth('tgl_waktu', '=', 6)->where('kategori_id', '1')->get();
        $juni_positif_count = $juni_positif->count();

        $juli_positif = Sentimen::whereMonth('tgl_waktu', '=', 7)->where('kategori_id', '1')->get();
        $juli_positif_count = $juli_positif->count();


        return view('administrator.content.visualisasi', compact(
            'positifCount',
            'negatifCount',
            'positif_test',
            'negatif_test',
            'positif_test_count',
            'negatif_test_count',
            'april_positif_count',
            'mei_positif_count',
            'juni_positif_count',
            'juli_positif_count',
        ));
    }
}
