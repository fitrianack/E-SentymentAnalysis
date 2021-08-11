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
use Carbon\Carbon;

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

        //Bar Chart Data Training
        $april_positif = Sentimen::whereMonth('tgl_waktu', '=', 4)->where('kategori_id', '1')->get();
        $april_positif_count = $april_positif->count();
        $mei_positif = Sentimen::whereMonth('tgl_waktu', '=', 5)->where('kategori_id', '1')->get();
        $mei_positif_count = $mei_positif->count();
        $juni_positif = Sentimen::whereMonth('tgl_waktu', '=', 6)->where('kategori_id', '1')->get();
        $juni_positif_count = $juni_positif->count();
        $juli_positif = Sentimen::whereMonth('tgl_waktu', '=', 7)->where('kategori_id', '1')->get();
        $juli_positif_count = $juli_positif->count();

        $april_negatif = Sentimen::whereMonth('tgl_waktu', '=', 4)->where('kategori_id', '2')->get();
        $april_negatif_count = $april_negatif->count();
        $mei_negatif = Sentimen::whereMonth('tgl_waktu', '=', 5)->where('kategori_id', '2')->get();
        $mei_negatif_count = $mei_negatif->count();
        $juni_negatif = Sentimen::whereMonth('tgl_waktu', '=', 6)->where('kategori_id', '2')->get();
        $juni_negatif_count = $juni_negatif->count();
        $juli_negatif = Sentimen::whereMonth('tgl_waktu', '=', 7)->where('kategori_id', '2')->get();
        $juli_negatif_count = $juli_negatif->count();

        return view('welcome', compact(
            'sentimen',
            'kategori',
            'positifCount',
            'negatifCount',
            'positif_test_count',
            'negatif_test_count',
            'april_positif_count',
            'mei_positif_count',
            'juni_positif_count',
            'juli_positif_count',
            'april_negatif_count',
            'mei_negatif_count',
            'juni_negatif_count',
            'juli_negatif_count',
        ));
    }

    public function predict(Request $request)
    {
        $raw_sentimen = new RawSentimen();
        $raw_sentimen->sentimen = $request->sentimen;
        $raw_sentimen->twitter_account = $request->email;
        $raw_sentimen->tgl_waktu = Carbon::now();

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
        $res = json_decode($response, true);

        $raw_sentimen->predict_kategori = $res['data']['prediksi'];

        $raw_sentimen->save();

        $res['token'] = csrf_token();
        return $res;
    }
}
