<?php

namespace App\Http\Controllers\Cms;

use Illuminate\Contracts\View\Factory;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the CMS dashboard.
     *
     * @return Factory|View
     */
    public function index()
    {
        return view('cms.index');
    }
}
