<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ministries extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'ministries';
    protected $fillable = [
        'title_en',
        'title_ar',
        'title_kr',
        'logo',
        'krg',
        'address',
        'gps_lat',
        'gps_lon',
        'website',
        'created_by',
    ];
}

