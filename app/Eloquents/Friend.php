<?php

namespace App\Eloquents;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Friend extends Authenticatable
{
    use HasApiTokens;

    protected $table = 'friends';

    protected $fillable = [
        'nickname', 'email', 'password', 'image_path'
    ];

        // JSONとしてレスポンスしてはダメな項目を定義
    protected $hidden = [
        'password', 'remember_token',
    ];
}
