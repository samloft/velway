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
     * Get news details from the passed ID.
     *
     * @param $id
     * @return mixed
     */
    public static function showById($id)
    {
        return (new News)->where('id', $id)->first();
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
     * Update news post details.
     *
     * @param $news_details
     * @return mixed
     */
    public static function updatePost($news_details)
    {
        $slug = Str::slug($news_details->title);

        $news = [
            'slug' => $slug,
            'title' => $news_details->title,
            'content' => $news_details->content,
            'updated_at' => date('Y-m-d H:i:s')
        ];

        if ($news_details->image) {
            $image_name = $slug . '.' . $news_details->image->getClientOriginalExtension();
            $news_details->image->move(public_path('images/news'), $image_name);

            $news['image'] = $image_name;
        }

        return (new News)->where('id', $news_details->id)->update($news);
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
