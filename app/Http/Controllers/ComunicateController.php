<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Comunication;


class ComunicateController extends Controller
{
    public function index(){
      $gatherings = Comunication::withTranslations()->orderBy('created_at','desc')->get();
      $gatherings = $gatherings->translate(\App::getLocale(), 'ro');
    $ani = Comunication::select('ani')->orderBy('ani','desc')->get();
    $ani=$ani->toArray();
    $aniSortati=array_unique($ani,SORT_REGULAR);
    
    
    
//     dd($id_agaSortat);
//     $agauri = Type::select('id','name')->whereIn('id', $id_agaSortat)->get()->toArray();
//     dd($agauri);
//     dd($gathering_agas);
//     $agas = Aga::get('id', 'name')->toArray();
//     dd($agas);
//     dd($gatherings);
    return view('comunicate',[
      'aniSortati'=>$aniSortati,
      'gatherings'=>$gatherings,
    ]);
  }   
}