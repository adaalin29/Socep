<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\News;
use DateTime;


class NewsController extends Controller
{
    
    public function index()
    {
      $descriere = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris fermentum malesuada vulputate. Nunc ac scelerisque enim, mollis pulvinar ex. Pe\
                          llentesque a blandit sem. Proin in dolor imperdiet, dapibus enim ut, porttitor urna. In euismod vel neque id pharetra. Pellentesque habitant morbi tristique senect
                          us et netus et malesuada fames ac turpis egestas. Integer ultrices bibendum sapien, ut tristique nunc iaculis vel. Donec elementum eros ante, maximus interdum mi eleifend
                          ut. Nunc quis nunc eleifend ante posuere eleifend. Phasellus condimentum eget tellus eu egestas. Duis risus nisl, sagittis at libero et, tempus rutrum mauris.
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris fermentum malesuada vulputate. Nunc ac scelerisque enim, mollis pulvinar ex. Pe\
                          llentesque a blandit sem. Proin in dolor imperdiet, dapibus enim ut, porttitor urna. In euismod vel neque id pharetra. Pellentesque habitant morbi tristique senect
                          us et netus et malesuada fames ac turpis egestas. Integer ultrices bibendum sapien, ut tristique nunc iaculis vel. Donec elementum eros ante, maximus interdum mi eleifend
                          ut. Nunc quis nunc eleifend ante posuere eleifend. Phasellus condimentum eget tellus eu egestas. Duis risus nisl, sagittis at libero et, tempus rutrum mauris.';
      $news = News::withTranslations()->get();
      $news = $news->translate(\App::getLocale(), 'ro');
      // dd($news);
      foreach($news as &$item){
        // $myDateTime = DateTime::createFromFormat('Y-m-d', $item->created_at);
        $data_formatata = date('Y-m-d', strtotime($item->created_at));
        $item->created_at = $data_formatata;
        $item->data_creare = $data_formatata;
      }
//       dd($news);
      return view('news',[
        'news' => $news,
        'descriere' => $descriere,
       
      ]);
      
    }
    
    
}