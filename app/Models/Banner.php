<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    const POSITION_SLIDER = 'slider';
    const POSITION_PARTNER = 'partner';

    protected $fillable = [
        'image', 'position',
        'title_vi', 'description_vi', 'link_vi',
        'title_en', 'description_en', 'link_en',
    ];
}
