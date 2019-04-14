<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Mail;

class ContactController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);

//        $message = Mail::to('sam@devloft.co.uk')->send(new Contact($request));
        $message = true;

        if ($message) {
            return back()->with('success', 'Your message has been sent, we will respond as soon as possible');
        }
        return back()->with('error', 'Your message could not be sent, please try again');
    }
}
