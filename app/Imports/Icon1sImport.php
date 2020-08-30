<?php

namespace App\Imports;

use App\Icon1;
use Maatwebsite\Excel\Concerns\ToModel;

class Icon1sImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Icon1([
            'name' => $row[0]
        ]);
    }
}
