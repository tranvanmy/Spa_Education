<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setup extends Model
{
    protected $fillable = [
        'logo', 'facebook', 'google', 'youtube', 'vimeo', 'twitter', 'linked_in',
        'title_vi', 'about_us_vi', 'about_us_youtube_vi', 'instructor_description_vi', 'rd_description_vi', 'footer_vi', 'seo_keyword_vi', 'seo_description_vi',
        'partner_vi', 'event_vi', 'data_scientist_vi', 'join_us_vi',

        'title_en', 'about_us_en', 'about_us_youtube_en', 'instructor_description_en', 'rd_description_en', 'footer_en', 'seo_keyword_en', 'seo_description_en',
        'partner_en', 'event_en', 'data_scientist_en', 'join_us_en',
    ];
}
