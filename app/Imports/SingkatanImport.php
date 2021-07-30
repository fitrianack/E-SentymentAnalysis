<?php

namespace App\Imports;

use App\Singkatan;
use Maatwebsite\Excel\Concerns\ToModel;

class SingkatanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Singkatan([
            'singkatan' => $row[0],
            'normal' => $row[1],
        ]);
    }
}
