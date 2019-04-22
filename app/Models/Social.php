<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'social';
    protected $guarded = ['id'];
    public $timestamps = false;

    /**
     * Return all the social media links.
     *
     * @return mixed
     */
    public static function show()
    {
        return (new Social)->first();
    }

    /**
     * Take the given social links and insert them (Or update
     * them if a row already exists).
     *
     * @param $request
     * @return mixed
     */
    public static function store($request)
    {
        return (new Social)->where('id', 1)->update($request);
    }
}
