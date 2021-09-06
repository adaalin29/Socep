<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Aga;
use App\Gathering;

use DB;


class AdunariController extends Controller
{
 
  public function index(){
    $gatherings = Gathering::withTranslations()->get();
    $ani = array();
    $agauri = array();
    foreach($gatherings as &$gat){
      $aga = Aga::withTranslations()->where('id',$gat->id_aga)->first();
      if($aga != null){
        $aga = $aga->translate(\App::getLocale(), 'ro');
        $gat->aga = $aga->name;
        $gat->an = $aga->ani;
        array_push($ani,$aga['ani']);
        array_push($agauri, ['id' => $aga->id, 'name' => $aga->name, 'an'=>$aga->ani]);
      }
    }
    $gatherings = $gatherings->translate(\App::getLocale(), 'ro');
    $aniSortati=array_unique($ani,SORT_REGULAR);
    $agauri=array_unique($agauri,SORT_REGULAR);
    arsort($aniSortati);
    
    return view('adunari',[
      'aniSortati'=>$aniSortati,
      'gatherings'=>$gatherings,
      'agauri' => $agauri,
    ]);
  }   
    
}