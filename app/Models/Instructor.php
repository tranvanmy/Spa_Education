<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $table = 'instructors';

    protected $fillable = [
        'name_vi', 'slug_vi', 'description_vi', 'detail_vi', 'has_vi', 'seo_keyword_vi', 'seo_description_vi', 'specialized_vi',
        'name_en', 'slug_en', 'description_en', 'detail_en', 'has_en', 'seo_keyword_en', 'seo_description_en', 'specialized_en',
        'point_review_manual', 'total_review_manual', 'is_review_manual', 'point_review_avg', 'total_review', 'viewed',
        'image_url'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
