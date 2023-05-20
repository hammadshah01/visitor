<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function result(Request $request)
    {
      dd($request);
    }
    public function addvisitor()
    {
     return view('admin.entervisitor');
    }
    public function excelupload()
    {
     return view('admin.excel-upload');
    
    }
    
}
