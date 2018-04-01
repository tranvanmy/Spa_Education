<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'title_vi', 'slug_vi', 'description_vi', 'detail_vi', 'has_vi', 'seo_keyword_vi', 'seo_description_vi',
        'title_en', 'slug_en', 'description_en', 'detail_en', 'has_en', 'seo_keyword_en', 'seo_description_en',
        'point_review_manual', 'total_review_manual', 'is_review_manual', 'point_review_avg', 'total_review', 'viewed',
        'author_id'
    ];
}
