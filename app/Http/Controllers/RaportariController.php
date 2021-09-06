<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Type;
use App\Periodic;


class RaportariController extends Controller
{
 
  public function index(){

    $gatherings = Periodic::withTranslations()->orderBy('created_at','desc')->get();
    $gatherings = $gatherings->translate(\App::getLocale(), 'ro');
    $ani = Periodic::select('ani')->orderBy('ani','desc')->get();
    $ani=$ani->toArray();
    $aniSortati=array_unique($ani,SORT_REGULAR);
    
    foreach($gatherings as  &$gat){
      $aga = Type::withTranslations()->where('id',$gat->id_aga)->first();
      if($gat->id_aga)
      $gat->aga = Type::where('id',$gat->id_aga)->first('name')->toArray()['name'];
    }
    $id_aga = Periodic::select('id_aga')->get();
    $id_aga=$id_aga->toArray();
    $id_agaSortat=array_unique($id_aga,SORT_REGULAR);
    $agauri = Type::select('id','name')->whereIn('id', $id_agaSortat)->get();
    $agauri = $agauri->translate(\App::getLocale(), 'ro')->toArray();
    return view('raportari',[
      'aniSortati'=>$aniSortati,
      'gatherings'=>$gatherings,
      'agauri' => $agauri,
    ]);
  }   
    
}