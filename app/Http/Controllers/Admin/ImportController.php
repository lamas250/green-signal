<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Imports\ProductsImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;


class ImportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.import.index');
    }

    public function import(Request $request)
    {
        $file = $request->file('file');

        Excel::import(new ProductsImport, $file);

        return back()->withStatus('Importado com sucesso.');
    }
}
