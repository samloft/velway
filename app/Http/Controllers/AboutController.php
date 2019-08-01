<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        $meta = [
            'title' => 'Maintenance - Operations - Project Management - Finance',
            'description' => 'National provider of property and compliance services, providing uncomplicated solutions and excellent customer service',
        ];

        return view('about.index', compact('meta'));
    }
}
