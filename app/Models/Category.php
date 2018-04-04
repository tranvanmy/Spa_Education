<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    const TYPE_DATA_SCIENTIST = 'data-scientist';
    const TYPE_PRODUCT = 'product';
    const TYPE_RD = 'research-development';

    protected $table = 'categories';

    protected $fillable = [
        'type',
        'title_vi', 'slug_vi', 'description_vi', 'seo_keyword_vi', 'seo_description_vi',
        'title_en', 'slug_en', 'description_en', 'seo_keyword_en', 'seo_description_en'
    ];
}
