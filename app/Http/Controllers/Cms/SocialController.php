<?php

namespace App\Http\Controllers\Cms;

use App\Models\Social;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class SocialController extends Controller
{
    /**
     * Display all the social links so they can be edited.
     *
     * @return Factory|View
     */
    public function index()
    {
        $social = Social::show()->getAttributes();

        return view('cms.social.index', compact('social'));
    }

    /**
     * Update all social media links.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $updated = Social::store($request->all());

        return $updated ? back()->with('success', 'Social media links have been updated') :
            back()->with('error', 'Unable to update social media links, please try again');
    }
}
