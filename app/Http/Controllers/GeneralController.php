<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class GeneralController extends Controller
{
  public function index(){
    return view('general');
  }   
    
}