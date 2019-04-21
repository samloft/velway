<?php

namespace App\Http\Controllers\Cms;

use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Redirector;
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

    /**
     * Show the create user page.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('cms.users.create');
    }

    /**
     * Create a new user.
     *
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:5'
        ]);

        $user_created = User::store($request);

        return $user_created ? redirect(route('cms.users'))->with('success', 'New user has been created') :
            back()->with('error', 'Unable to create user, please try again');
    }

    /**
     * Delete a user with the given ID.
     *
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $user_deleted = User::destroy($id);

        return $user_deleted ? back()->with('success', 'User has been deleted') :
            back()->with('error', 'Unable to delete user, please try again');
    }
}
