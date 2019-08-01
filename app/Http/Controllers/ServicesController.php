<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServicesController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        $meta = [
            'title' => 'Velway services',
            'description' => 'Velway\'s in-house teams and service partners deliver reactive and planned preventative maintenance and facilities management nationally. '
        ];

        return view('services.index', compact('meta'));
    }
}
