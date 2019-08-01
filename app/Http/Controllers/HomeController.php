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
        $meta = [
            'title' => 'Velway Limited | Property and compliance management',
            'description' => 'Leading experts providing property and compliance management, across portfolios of any size. '
        ];

        return view('index', compact('meta'));
    }
}
