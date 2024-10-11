<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http; 
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
   {

    return view('index');
   }
   public function fouthPages()
   {
 
   

    return view('fourthpage');
   }
}
