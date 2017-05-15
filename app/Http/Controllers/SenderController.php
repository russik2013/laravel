<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SenderController extends Controller
{
    public function index(){

        return view('sender.index');

    }

    public function formUpload(Request $request){

        dd($request->file);

    }
}
