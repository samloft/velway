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
        $meta = [
            'title' => 'Contact Us',
            'description' => 'Velway Limited, Landsberg, Lichfield Road Ind. Est, Tamworth, Staffordshire, B79 7XB. Tel: 01827 300631 Email: info@velway.co.uk'
        ];

        return view('contact.index', compact('meta'));
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

        $message = Mail::to('info@velway.co.uk')->send(new Contact($request));

        if ($message) {
            return back()->with('success', 'Your message has been sent, we will respond as soon as possible');
        }
        return back()->with('error', 'Your message could not be sent, please try again');
    }
}
