<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Car;



class ContainerController extends Controller
{

  
  public function index(){
    $car = Car::withTranslations()->orderBy('order')->get();
    $car  = $car->translate(\App::getLocale(), 'ro');
    return view('container',[
      'car' =>$car,
    ]);
  }   
    
}