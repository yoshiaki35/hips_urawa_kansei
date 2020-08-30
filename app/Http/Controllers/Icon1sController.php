<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Icon1sImport;

class Icon1sController extends Controller
{
    public function index()
    {
        return view('import.index');
    }

    public function store(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new Icon1sImport, $file);
    }
}
