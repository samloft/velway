<?php

namespace App\Http\Controllers\Cms;

use App\Models\News;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class NewsController extends Controller
{
    /**
     * Display all the news items.
     *
     * @return Factory|View
     */
    public function index()
    {
        $news = News::show();

        return view('cms.news.index', compact('news'));
    }

    /**
     * Display the create news form.
     *
     * @param $id
     * @return Factory|View
     */
    public function show($id = null)
    {
        if ($id) {
            $news = News::showById($id);
        } else {
            $news = false;
        }

        return view('cms.news.create', compact('news'));
    }

    /**
     * Create a new news post, if an ID is passed in the request
     * then update the news post.
     *
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        if ($request->id) {
            $request->validate([
                'title' => 'required',
                'image' => 'image|mimes:png,jpg,jpeg',
                'content' => 'required|min:100'
            ]);

            $news_updated = News::updatePost($request);

            return $news_updated ? redirect(route('cms.news'))->with('success', 'News post ' . $request->title . ' has been updated') :
                back()->with('error', 'Unable to update news post, please try again');
        }

        $request->validate([
            'title' => 'required|unique:news',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'content' => 'required|min:100'
        ]);

        $news_created = News::store($request);

        return $news_created ? redirect(route('cms.news'))->with('success', 'New news post has been created') :
            back()->with('error', 'Unable to create news post, please try again');
    }

    /**
     * Delete a news post with the given ID.
     *
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $news_deleted = News::destroy($id);

        return $news_deleted ? back()->with('success', 'News post has been deleted') :
            back()->with('error', 'Unable to delete news post, please try again');
    }
}
