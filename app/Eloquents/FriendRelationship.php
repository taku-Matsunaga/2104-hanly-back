<?php

namespace App\Eloquents;

use Illuminate\Database\Eloquent\Model;

class FriendRelationship extends Model
{
    protected $table = 'friend_relationships';

    protected $fillable = [
        'own_friends_id',
        'other_friends_id',
    ];
}
