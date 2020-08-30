<?php

namespace App\Imports;

use App\Lasttime;
use Maatwebsite\Excel\Concerns\ToModel;

class LasttimesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Lasttime([
            'name' => $row[0]
        ]);
    }
}
