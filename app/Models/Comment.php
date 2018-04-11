<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    const PER_PAGE_COURSE = 5;

    protected $table = 'comments';

    protected $fillable = ['name', 'email', 'content', 'commentable_id', 'commentable_type'];

    public function commentable()
    {
        return $this->morphTo();
    }
}
