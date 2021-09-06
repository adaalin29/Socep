<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Type;
use App\Archive;
use App\Year;

class CalendarFinanciarController extends Controller
{
    public function index(){
      $gatherings = Archive::withTranslations()->orderBy('created_at','desc')->get();
      $gatherings = $gatherings->translate(\App::getLocale(), 'ro');
    $ani = Archive::select('ani')->orderBy('ani','desc')->get();
    $ani=$ani->toArray();
    $aniSortati=array_unique($ani,SORT_REGULAR);
    
    //in cazul in care doreste adaugarea unui an care nu este in Years, se va sterge App\Year si relatia.
    
//     dd($id_agaSortat);
//     $agauri = Type::select('id','name')->whereIn('id', $id_agaSortat)->get()->toArray();
//     dd($agauri);
//     dd($gathering_agas);
//     $agas = Aga::get('id', 'name')->toArray();
//     dd($agas);
//     dd($gatherings);
    return view('calendar-financiar',[
      'aniSortati'=>$aniSortati,
      'gatherings'=>$gatherings,
    ]);
  }   
}