<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Directorates extends Model
{
    protected $table = 'directorates';

    use HasFactory, SoftDeletes;
}
