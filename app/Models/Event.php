<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = [
        'title_vi', 'slug_vi', 'description_vi', 'detail_vi', 'has_vi', 'seo_keyword_vi', 'seo_description_vi', 'topic_vi', 'address_vi',
        'title_en', 'slug_en', 'description_en', 'detail_en', 'has_en', 'seo_keyword_en', 'seo_description_en', 'topic_en', 'address_en',
        'point_review_manual', 'total_review_manual', 'is_review_manual', 'point_review_avg', 'total_review', 'viewed',
        'image_url', 'author_id', 'start_at', 'end_at'
    ];
}
