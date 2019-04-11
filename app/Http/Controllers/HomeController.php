<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return Factory|View
     */
    public function index()
    {
        return view('index');
    }
}
