<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyInformation extends Model
{
    protected $table = 'company_details';
    protected $guarded = ['id'];
    public $timestamps = false;

    /**
     * Get all the company information.
     *
     * @return mixed
     */
    public static function show()
    {
        return (new CompanyInformation)->first();
    }

    /**
     * Update company information.
     *
     * @param $request
     * @return mixed
     */
    public static function store($request)
    {
        return (new CompanyInformation)->where('id', 1)->update($request);
    }
}
