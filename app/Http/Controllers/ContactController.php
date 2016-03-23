<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;

class ContactController extends Controller
{

	public function getinfos(){

     return view('form.contact');

	}

    public function postinfos(ContactRequest $request){
       
     Mail::send('form.admin', $request ->all(), function($message){
              $message->to('bentabetj@yahoo.fr')->subject('new message');

        });

     return view('form.confirm');
   
           
    }
}
