<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ContactController extends Controller {
  
        
         
              
    function contactPost(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required',
      'number'  => 'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message,
            'number'    =>  $request->number,
            'subject'   =>  $request->subject,
        );

     Mail::to('smbedis@inklineofficesolutionsinc.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}