<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Users;
use Mail;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
    public function emailBroadcast(){
        return view('Admin.emailbroadcast');
    }

    public function postEmailBroadcast(Request $request){
        //return $request->input();
        $subject=$request->input('subject');
        $content=$request->input('content');
        $emailist=Users::select('email')->get();
       
        
        foreach($emailist as $key => $user){
        $data = [
            'subject' => $request->subject,
            'email' => $user->email,
            'content' =>nl2br($request->content)
          ];
  //dd($data);
          Mail::send('Admin/email-template', $data, function($message) use ($data) {
            $message->to($data['email'])
            ->subject($data['subject']);
          });
        }


          return back()->with('success','Broadcast Email Sent Successful'); 
     }


    public function postMemberMail(Request $request){
        //return $request->input();
        $data = [
            'subject' => $request->subject,
            'email' => $request->email,
            'content' => $request->content
          ];
  
          Mail::send('Admin/email-template', $data, function($message) use ($data) {
            $message->to($data['email'])
            ->subject($data['subject']);
          });
          return back()->with('success','Email Sent Successful'); 
     }


     public function postMemberMailxx(Request $request){
        //return $request->input();
        $data = array('name'=>"ATWAP");
        Mail::send('mail', $data, function($message) {
           $message->to("$request->input('email')", "$request->input('name')")->subject
              ($request->input('subject'));
           $message->from('bookmenow.com.ng@gmail.com','ATWAP');
        });
        return back()->with('success','Email Sent Successful'); 
     }

   public function basic_email() {
      $data = array('name'=>"BookMe Now");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('ermsapp@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('bookmenow.com.ng@gmail.com','BookMe Now');
      });
      echo "Basic Email Sent. Check your inbox.";
   }
   public function html_email() {
      $data = array('name'=>"BookMe Comp");
      Mail::send('mail', $data, function($message) {
         $message->to('ermsapp@gmail.com', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
         $message->from('bookmenow.com.ng@gmail.com','Book Me now company');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
   public function attachment_email() {
      $data = array('name'=>"Virat Gandhi");
      Mail::send('mail', $data, function($message) {
         $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
         $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}