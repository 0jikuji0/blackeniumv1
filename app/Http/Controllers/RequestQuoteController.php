<?php

namespace App\Http\Controllers;
use App\Mail\RequestQuoteMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\SendRequestQuoteRequest;

use Illuminate\Http\Request;

class RequestQuoteController extends Controller
{
    //
    public function send(SendRequestQuoteRequest $request)
    {
        Mail::send(new RequestQuoteMail($request->validated()));
        return back()->with('success', 'Votre demande a été envoyé.');
    }
}