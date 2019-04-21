<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Show the Home page.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('index');
    }
}
