<?php

namespace App\Imports;

use App\Tag2;
use Maatwebsite\Excel\Concerns\ToModel;

class Tag2sImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tag2([
            'name' => $row[0]
        ]);
    }
}
