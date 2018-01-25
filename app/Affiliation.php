<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Affiliation extends Model
{
    //affiliation table
    use SoftDeletes;

    protected $fillable = [
      'department',
      'manager',
      'sectionChief'
    ];

    protected $table = 'affiliation';

    protected $dates = ['deleted_at'];

    protected $timestamps = false;
}
