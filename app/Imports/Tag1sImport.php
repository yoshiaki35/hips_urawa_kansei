<?php

namespace App\Imports;

use App\Tag1;
use Maatwebsite\Excel\Concerns\ToModel;

class Tag1sImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tag1([
            'name' => $row[0]
        ]);
    }
}
