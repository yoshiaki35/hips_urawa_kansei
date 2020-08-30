<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Tag2sImport;

class Tag2sController extends Controller
{
    public function index()
    {
        return view('import.index');
    }

    public function store(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new Tag2sImport, $file);
    }
}
