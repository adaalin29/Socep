<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Employee;


class ConsiliuController extends Controller
{
  
 
  public function index(){
    
    $employees = Employee::withTranslations()->get();
    $employees = $employees->translate(\App::getLocale(), 'ro');
    return view('consiliu',[
      'employees'=> $employees,
      
    ]);
  }   
    
}