<?php

namespace App\Imports;

use App\Sentimen;
use Maatwebsite\Excel\Concerns\ToModel;

class DataTrainingImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Sentimen([
            
            'sentimen' => $row[1],
            'twitter_account' => $row[2], 
            'tgl_waktu' => $row[3], 
            'kategori_id' => $row[4], 
        ]);
    }
}
