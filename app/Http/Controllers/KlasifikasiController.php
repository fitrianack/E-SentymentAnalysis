<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Sentimen;
use App\Stopwords;
use App\Imports\RawSentimenImport;
use Maatwebsite\Excel\Facades\Excel;
use Session;

class KlasifikasiController extends Controller
{
    public function analisis_sentimen(){
        return view('administrator.content.analisis-sentimen');
    }

    public function klasifikasi(){
        
        //Training
        $dataTraining = Sentimen::select('sentimen')->get()->toArray();
        $labels = Sentimen::select('kategori_id')->get()->toArray();
        $samples = [];

        //1. ubah ke huruf kecil            
        $teks = strtolower(trim($dataTraining));

        //hilangkan tanda baca
        $teks = str_replace("'", " ", $teks);
        $teks = str_replace("-", " ", $teks);
        $teks = str_replace(")", " ", $teks);
        $teks = str_replace("(", " ", $teks);
        $teks = str_replace("\"", " ", $teks);
        $teks = str_replace("/", " ", $teks);
        $teks = str_replace("=", " ", $teks);
        $teks = str_replace(".", " ", $teks);
        $teks = str_replace(",", " ", $teks);
        $teks = str_replace(":", " ", $teks);
        $teks = str_replace(";", " ", $teks);
        $teks = str_replace("!", " ", $teks);
        $teks = str_replace("&", " ", $teks);
        $teks = str_replace("@", " ", $teks);
        $teks = str_replace("#", " ", $teks);
        $teks = str_replace("$", " ", $teks);
        $teks = str_replace("%", " ", $teks);
        $teks = str_replace("*", " ", $teks);
        $teks = str_replace("_", " ", $teks);
        $teks = str_replace("+", " ", $teks);
        $teks = str_replace("{", " ", $teks);
        $teks = str_replace("}", " ", $teks);
        $teks = str_replace("[", " ", $teks);
        $teks = str_replace("]", " ", $teks);
        $teks = str_replace("|", " ", $teks);
        $teks = str_replace("<", " ", $teks);
        $teks = str_replace(">", " ", $teks);
        $teks = str_replace("?", " ", $teks);
        $teks = str_replace("^", " ", $teks);
        $teks = str_replace("0", " ", $teks);
        $teks = str_replace("1", " ", $teks);
        $teks = str_replace("2", " ", $teks);
        $teks = str_replace("3", " ", $teks);
        $teks = str_replace("4", " ", $teks);
        $teks = str_replace("5", " ", $teks);
        $teks = str_replace("6", " ", $teks);
        $teks = str_replace("7", " ", $teks);
        $teks = str_replace("8", " ", $teks);
        $teks = str_replace("9", " ", $teks);
        $teks = str_replace("RT", " ", $teks);
        $teks = str_replace("\\t"," ", $teks);
        $teks = str_replace("\\n"," ", $teks);
        $teks = str_replace("\\u"," ", $teks);
        $teks = str_replace("\\"," ", $teks);
        $teks = str_replace("http://", " ", $teks);
        $teks = str_replace("https://", " ", $teks);

        //2. hapus stoplist
        //daftar stop word diletakkan di array
        //anda boleh menggunakan database sebagai gantinya
        $astoplist = Stopwords::select('kata')->get()->toArray(); 
                                                
        foreach ($astoplist as $i => $value) {
            $teks = str_replace($astoplist[$i], "", $teks);
        }

        //3. terapkan stemming
        //pemetaan term --> stem hanya menggunakan array
        //index ganjil menunjukkan term dan index genap adalah stem dari term tersebut
        //anda boleh menggunakan database sebagai gantinya
        $astemlist = array("pertemuan", "temu", "bertemu", "temu", "cr9", "cristiano ronaldo", "berharap", "harap");
        
        //perhatikan cara mengubah suatu term ke bentuk stemnya
        for ($i=0; $i<count($astemlist); $i = $i +2) {
            //ganti term (jika ditemukan term pada index ganjil) dengan stem pada index genap ($i=1)        
            $teks = str_replace($astemlist[$i], $astemlist[$i+1], $teks);
        }

        //hilangkan ruang kosong di awal & akhir teks   
        $teks = trim($teks);
    
        return $teks;

    }
}
