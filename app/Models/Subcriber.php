<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcriber extends Model
{
    protected $table = 'subcribers';

    protected $fillable = ['email', 'name', 'phone'];
}
