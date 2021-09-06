<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\Page;

class IndexController extends Controller
{
  public function index(){

    return view('index');
  } 
  
  
   public function meniu_static($url){
     
//       $url = ucfirst($url);
//      $continut_pagina = DB::table('settings')->where('key', $url)->first()->value; 
//      $titlu_pagina = DB::table('settings')->where('key', $url)->first()->display_name; 
//       dd($continut_pagina);
//       return view('detaliu', [
//         'continut' => $continut_pagina,
//         'titlu' => $titlu_pagina
//       ]);
     
     $url = ucfirst($url);

     $continut_pagina = Page::where('slug', $url)->withTranslations()->first();
     $continut_pagina = $continut_pagina->translate(\App::getLocale(), 'ro');
    //  $continut_pagina = $continut_pagina[0];
//      dd($continut_pagina);
     return view('detaliu',[
       'continut'=>$continut_pagina->text,
       'titlu'=>$continut_pagina->titlu
     ]);
     
//      $pagina = Page::where('slug',$url)->firstOrFail();
//      dd($pagina->toArray());
     
    }
    
    
}