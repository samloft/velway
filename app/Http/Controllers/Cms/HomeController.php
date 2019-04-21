<?php

namespace App\Http\Controllers\Cms;

use App\User;
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
        $dashboard = [
            'users' => User::showCount()
        ];

        return view('cms.index', compact('dashboard'));
    }
}
