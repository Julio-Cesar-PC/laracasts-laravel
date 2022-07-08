<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate([
            'email' => 'required|email'
        ]);

        try {
            $newsletter->subscribe(request('email'));
        } catch (\Exception $e) {
            return redirect('/')->with('message', 'There was an error subscribing you to our newsletter');
        }

        return redirect('/')->with('message', 'You have been subscribed to our newsletter!');
    }
}
