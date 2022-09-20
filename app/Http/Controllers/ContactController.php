<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Alert;
use App\Models\Client;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function sendMail(Request $request)
    {
        // dd($request->all());

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to($request->email)->send(new ContactMail($data));

        Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        Alert::success("Request Sent Successfully!", "We have recieved your request successfully!");

        return redirect()->back();
    }

}
