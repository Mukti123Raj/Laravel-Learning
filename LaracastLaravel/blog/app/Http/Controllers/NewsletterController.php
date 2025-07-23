<?php

namespace App\Http\Controllers;

use App\Services\MailchimpNewsletter;
use App\Services\newsletter;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(newsletter $newsletter)
    {
         request()->validate([
        'email' => 'required|email',
    ]);


    try{
        // $newsletter = new newsletter();

        $newsletter->subscribe(request('email'));
        }catch(\Exception $e){
            throw ValidationException::withMessages([
            'email' => 'This email address could not be added to our newsletter list.'
        ]);
    }

    return redirect('/')->with('success', 'You are now signed up for our newsletter!');

    }
}
