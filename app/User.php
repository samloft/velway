<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Return all the admin users.
     *
     * @return mixed
     */
    public static function show()
    {
        return (new User)->orderBy('name', 'asc')->get();
    }

    /**
     * Count of all the users.
     *
     * @return mixed
     */
    public static function showCount()
    {
        return (new User)->count();
    }

    /**
     * Add the user to the database.
     *
     * @param $user
     * @return mixed
     */
    public static function store($user)
    {
        $user_details = [
            'name' => $user->name,
            'email' => $user->email,
            'password' => Hash::make($user->password),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        return (new User)->insert($user_details);
    }
}
