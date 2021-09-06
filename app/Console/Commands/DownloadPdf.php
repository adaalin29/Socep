<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DownloadPdf extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'downloadpdf';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $dom = new \DOMDocument;
        $html = file_get_contents('http://www.socep.ro/arhiva2008-20015.htm');   
        libxml_use_internal_errors(true);              
        $dom->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));            
        libxml_use_internal_errors(false);
        $nodes = $dom->getElementsByTagName('a');  
        $arrayElemente = [];
        foreach ($nodes as $node)               
        {             
            if(strpos($node->getAttribute('href'),'.pdf')!=false){
                $arrayElemente[$node->getAttribute('href')] = trim($node->textContent);
            }
        }
        $http = new \GuzzleHttp\Client;
        foreach($arrayElemente as $link => $titlu){
            $result = $http->request('GET', url($link), [
                'allow_redirects' => true,
                'http_errors' => false,
                'headers' => [],
            ]);
            $resultStatus = $result->getStatusCode();
            if ($resultStatus != '200') continue;
            \Storage::disk('public')->put('AGA/'.$titlu.'.pdf',$result->getBody()); 
            $arhiva = new \App\Gathering;
            $arhiva->name = $titlu;
            $arhiva->url = \Storage::disk('public')->url('AGA/'.$titlu.'.pdf');
            if(strpos($titlu,'2019')!=false){
                $arhiva->ani = 2019;
            }
            
            if(strpos($titlu,'curent')!=false){
                $arhiva->id_aga = 1;
            }
            if(strpos($titlu,'Semestrul')!=false){
                $arhiva->id_aga = 1;
            }
            if(strpos($titlu,'Trimestrul')!=false || strpos($titlu,'trimestrul')!=false){
                $arhiva->id_aga = 3;
            }
            if(strpos($titlu,'preliminar')!=false || strpos($titlu,'anual')!=false){
                $arhiva->id_aga = 5;
            }
            if(!$arhiva->id_aga){
                $arhiva->id_aga = 6;
            }


           
            $arhiva->save();
        }
        echo "successsss!!!!\n";
    }
}
