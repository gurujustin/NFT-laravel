<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function contactUs(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        Mail::send('email',
            array(
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message
            ), function($message) use($request)
        {
            $message->from($request->email);
            $message->to('ucosmomasks.info@gmail.com')->subject('Contact Email');
        });
        return back()->with('success', 'Your email is successfully sent!');
    }
}
