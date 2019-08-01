<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Str;

class NewsController extends Controller
{
    /**
     * Display news posts, paginated by 10.
     *
     * @return Factory|View
     */
    public function index()
    {
        $meta = [
            'title' => 'Velway News',
            'description' => 'Velway unleash a new Velway Property Management system but retain their excellence in customer service.'
        ];

        $news_posts = News::show();

        return view('news.index', compact('meta', 'news_posts'));
    }

    /**
     * Show the full news article.
     *
     * @param $slug
     * @return Factory|View
     */
    public function show($slug)
    {
        $news = News::details($slug);

        $meta = [
            'title' => 'Velway News - ' . $news->title,
            'description' => Str::limit(strip_tags($news->content), 155)
        ];

        return view('news.view', compact('news', 'meta'));
    }
}
