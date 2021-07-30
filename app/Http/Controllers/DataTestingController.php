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

class DataTestingController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        $raw_sentimen = RawSentimen::all();
        return view('administrator.content.data-testing', compact('raw_sentimen'));
    }
}
