<?php

namespace App\Imports;

use App\Stopwords;
use Maatwebsite\Excel\Concerns\ToModel;

class StopwordsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Stopwords([
            'kata' => $row[0],
        ]);
    }
}
