<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use App\Message;
use App\Mail\SendMessageCareers;
use Illuminate\Support\Facades\Mail;
use App\Job;
use App\Email;


class CareerController extends Controller
{
  
  public function index(){
    // dd($email[0]);
    $job = Job::withTranslations()->get();
    $job  = $job->translate(\App::getLocale(), 'ro');
    return view('career',[
      'job'=>$job,
    ]);
  } 

  public function detaliuJob($url){
    {
       $url = ucfirst($url);
       $detaliuJob = Job::where('slug', $url)->withTranslations()->first();
       $detaliuJob = $detaliuJob->translate(\App::getLocale(), 'ro');
      //  dd($detaliuJob->toArray());
     return view('job',[
       'detaliuJob' => $detaliuJob,
//        'titlu'=>$detaliuJob->titlu,
//        'continut'=>$detaliuJob->title,
     ]);
     
   }
   
 }
  
  
 public function submit_file(Request $request){
     $email = Email::first();
 
        $form_data = $request->only(['email']);
        $validationRules = [
            'email'         => ['required','email']
            // 'cv'         => ['required','cv'],
        ];
      
        $validationMessages = [
            'email.email'    => "Trebuie sa introduci o adresa de :attribute valida!",        
            'email.required'    => "Campul email este obligatoriu!"
            // 'cv.required' => 'Campul CV trebuie sa fie obligatoriu!'
        ];
      // Get the uploades file with name document
      $document = null;
      if($request->file('cv')){ 
       $document = Input::file('cv');
      
       if ($document->getError() == 1) {
            $max_size = $document->getMaxFileSize() / 1024 / 1024;  // Get size in Mb
            $error = 'CV-ul trebuie sa fie mai mic de ' . $max_size . 'Mb.';
            return ['success' => false, 'msg' => $error];  
        }
        
        if ($document->getClientMimeType() !== 'application/pdf')
        {
          return ['success' => false, 'msg' => 'Va rugam sa incarcati un fisier de tip pdf!'];  
        }
      }
      
        $date_de_salvat = [
          'email' => $request->input('email'),
          'cv' => $document != null ? 'Da' : 'Nu',
        ];
      
      $job = Job::find($request->jobid);
   $jobname = optional($job)->titlu ?: 'Job';
   
      $date_de_trimis = [
          'email' => $request->input('email'),
          'cv' => $document,
          'job' => $jobname,
        ];
      
        $validator = Validator::make($form_data, $validationRules, $validationMessages);
        if ($validator->fails())
            return ['success' => false, 'msg' => $validator->errors()->all()];  
        else{
//             Message::create($date_de_salvat); 
          
            $date_salvare = new Message;
            $date_salvare->email = $request->input('email');
            $date_salvare->cv = $request->file('cv') ? "Da" : "Nu";
//           dd($date_salvare);
            $date_salvare->save();
          
            Mail::to($email->email)->send(new SendMessageCareers($date_de_trimis));
            return ['success' => true,'msg'=>'Mesajul a fost trimis cu succes'];
        }
              
    }
}