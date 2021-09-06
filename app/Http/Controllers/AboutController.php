<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Benefit;
use App\Sustainable;


class AboutController extends Controller
{
  public function index(){
    
    $beneficiu = Benefit::withTranslations()->get();
    $beneficiu  = $beneficiu->translate(\App::getLocale(), 'ro');
    $sustainable = Benefit::get();
    return view('about',[
      'beneficiu' =>$beneficiu,
      'sustainable' =>$sustainable,
    ]);
  }   
    
}