<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class NewsController extends Controller
{
    /**
     * Display news posts, paginated by 10.
     *
     * @return Factory|View
     */
    public function index()
    {
        $news_posts = News::show();

        return view('news.index', compact('news_posts'));
    }
}
