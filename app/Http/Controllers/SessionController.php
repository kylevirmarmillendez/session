<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(Request $request){

     $request->session()->put(['name2'=>'master baiter']);



    //   session(['name'=>'master baiter']);

   

    //return view('index');

    // $request->session()->forget('name2');
    // $request->session()->flush();

    $request->session()->flash('message', 'Post has been created');

    return $request->session()->get('message');
    }
}
