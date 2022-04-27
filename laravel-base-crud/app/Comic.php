<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'thumb',
        'title',
        'type',
        'series',
        'description',
        'sale_date',
        'price'
    ];
}
