<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specifications extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'company',
        'resp_name',
        'resp_firstname',
        'resp_tel',
        'resp_email',
        'website',
        'domain_have',
        'domain_name',
        'domain_wanted',
        'write_text',
        'have_picture',
        'number_pages',
        'graphic_have',
        'example',
        'description',
        'have_picture',
        'functionalities',
        'description_complementary'
    ];

}
