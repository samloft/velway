<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $meta = [
            'title' => 'Maintenance - Operations - Project Management - Finance',
            'description' => 'National provider of property and compliance services, providing uncomplicated solutions and excellent customer service',
        ];

        return view('about.index', compact('meta'));
    }
}
