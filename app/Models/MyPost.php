<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyPost extends Model
{
    use HasFactory;

    //if use different models name need to specific the models comparing with which database table

    protected $fillable = [
        'title',
        'description',
        'status',
        'publish_date',
        'user_id',
        'category_id',
        'views'
    ];

    // protected $guarded = [];
}
