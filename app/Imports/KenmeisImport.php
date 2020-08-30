<?php

namespace App\Imports;

use App\Kenmei;
use Maatwebsite\Excel\Concerns\ToModel;

class KenmeisImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Kenmei([
            'name' => $row[0]
        ]);
    }
}
