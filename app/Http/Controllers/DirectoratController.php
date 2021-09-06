<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Directory;

class DirectoratController extends Controller
{
    
    
    public function index()
    {

     
      $directory = Directory::withTranslations()->get();
      $directory  = $directory->translate(\App::getLocale(), 'ro');
      return view('directorat',[
        'directory' =>$directory,
      ]);
      
      
    }
    
    
}