<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Certification;


class CertificariController extends Controller
{
  
  
  public function index(){
    $certificat  = Certification::get();
  // dd($certificat);
    return view('certificari',[
      'certificat' => $certificat,
    ]);
  }   
    
}