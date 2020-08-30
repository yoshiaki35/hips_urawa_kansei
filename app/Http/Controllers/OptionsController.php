<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\OptionsImport;

class OptionsController extends Controller
{
    public function index()
    {
        return view('import.index');
    }
    
    public function store(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new OptionsImport, $file);
    }
}
