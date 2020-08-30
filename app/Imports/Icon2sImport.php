<?php

namespace App\Imports;

use App\Icon2;
use Maatwebsite\Excel\Concerns\ToModel;

class Icon2sImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Icon2([
            'name' => $row[0]
        ]);
    }
}
