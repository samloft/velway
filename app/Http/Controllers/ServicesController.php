<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $meta = [
            'title' => 'Velway services',
            'description' => 'Velway\'s in-house teams and service partners deliver reactive and planned preventative maintenance and facilities management nationally. '
        ];

        return view('services.index', compact('meta'));
    }
}
