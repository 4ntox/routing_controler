<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class coba extends Controller
{
    /**
     * @param \Iluminate\Http\Request $request
     * @return \Iluminate\Http\Response
     */


    public function_invoke(Request $request)
    {
        //
    }

    public function index (Request $request) {
        return view('coba', ['nama'=> 'World']);
    }
}