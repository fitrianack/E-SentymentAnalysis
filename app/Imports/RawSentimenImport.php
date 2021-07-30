<?php

namespace App\Imports;

use App\RawSentimen;
use Maatwebsite\Excel\Concerns\ToModel;

class RawSentimenImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new RawSentimen([
            'sentimen' => $row[1],
            'twitter_account' => $row[2], 
            'tgl_waktu' => $row[3], 
        ]);
    }
}
