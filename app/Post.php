<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    // 多对一： 所属的用户
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
