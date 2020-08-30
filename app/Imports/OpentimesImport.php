<?php

namespace App\Imports;

use App\Opentime;
use Maatwebsite\Excel\Concerns\ToModel;

class OpentimesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Opentime([
            'name' => $row[0]
        ]);
    }
}