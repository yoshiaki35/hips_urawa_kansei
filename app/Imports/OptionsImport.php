<?php

namespace App\Imports;

use App\Option;
use Maatwebsite\Excel\Concerns\ToModel;

class OptionsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Option([
            'name' => $row[0]
        ]);
    }
}
