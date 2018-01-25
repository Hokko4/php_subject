<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
    //position table
    use SoftDeletes;

    protected $fillable = [
      'position'
    ];

    protected $table = 'position';

    protected $dates = ['deleted_at'];

    protected $timestamps = false;
}