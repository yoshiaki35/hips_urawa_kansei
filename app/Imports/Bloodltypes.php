<?php

namespace App\Imports;

use App\bloodltype;
use Maatwebsite\Excel\Concerns\ToModel;

class Bloodltypes implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new bloodltype([
            'name' => $row[0]
        ]);
    }
}
