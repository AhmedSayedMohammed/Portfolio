<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMe;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
     public function index()
     {
         
     }
     public function create(Request $request)
     {
        if( Mail::to('ahmed.baker5101995@gmail.com','AhmedBakr')->send(new ContactMe($request)));
        {
            return back()->with(['success','Email sent successfully']);
        }
        
     }
}
