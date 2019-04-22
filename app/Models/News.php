<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Str;

class News extends Model
{
    /**
     * Return the news list, paginated to 10 per page.
     *
     * @return mixed
     */
    public static function show()
    {
        return (new News)->orderBy('created_at', 'desc')->paginate(10);
    }

    /**
     * Get the count of all news posts.
     *
     * @return mixed
     */
    public static function showCount()
    {
        return (new News)->count();
    }

    /**
     * Return the news item for the passed slug
     *
     * @param $slug
     * @return mixed
     */
    public static function details($slug)
    {
        return (new News)->where('slug', $slug)->first();
    }

    /**
     * Store a new news post.
     *
     * @param $news_details
     * @return mixed
     */
    public static function store($news_details)
    {
        $slug = Str::slug($news_details->title);
        $image_name = $slug . '.' . $news_details->image->getClientOriginalExtension();

        $news = [
            'slug' => $slug,
            'title' => $news_details->title,
            'content' => $news_details->content,
            'image' => $image_name,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $news_details->image->move(public_path('images/news'), $image_name);

        return (new News)->insert($news);
    }

    /**
     * Delete a news item with the given ID.
     *
     * @param int $id
     * @return int
     */
    public static function destroy($id): int
    {
        $news = (new News)->where('id', $id)->first();
        $deleted = (new News)->where('id', $id)->delete();

        if ($deleted) {
            unlink(public_path('images/news/' . $news->image));

            return true;
        }

        return false;
    }
}
