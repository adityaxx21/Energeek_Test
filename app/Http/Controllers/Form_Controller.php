<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Form_Controller extends Controller
{
    public function index()
    {
       $data['skills'] = DB::table('skills')->get();
       $data['jobs'] = DB::table('jobs')->get();
       
       return view('form',$data);
    }

    public function index_post(Request $request)
    {
        # code...
    }
}
