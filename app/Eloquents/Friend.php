<?php

namespace App\Eloquents;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $table = 'friends';

    protected $fillable = [
        'nickname', 'email', 'password', 'image_path'
    ];
}
