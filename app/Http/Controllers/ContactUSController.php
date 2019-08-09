<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUS;

use Mail;

class ContactUSController extends Controller
{
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
 public function contactUS()
 {
     return view('contactUS');
 }
 /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
 public function contactUSPost(Request $request)
 {
     $this->validate($request, [
      'name' => 'required',
      'email' => 'required|email',      
      'message' => 'required'
      ]);
     ContactUS::create($request->all());

     Mail::send('email',
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'number' => $request->get('number'),
           'user_message' => $request->get('message')
       ), function($message)
       {
       $message->from('admin@admin.com');
       $message->to('tonganninja@googlemail.com', 'Admin')->subject('New Customer Comment');
      });

     return back()->with('success', 'Thanks for contacting us!');
 }
}
