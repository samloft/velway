<?php

namespace App\Http\Controllers\Cms;

use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Displays all the admin users.
     *
     * @return Factory|View
     */
    public function index()
    {
        $users = User::show();

        return view('cms.users.index', compact('users'));
    }
}
