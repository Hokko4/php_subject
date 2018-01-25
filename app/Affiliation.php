<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Affiliation extends Model
{
    //affiliation table
    use SoftDeletes;

    protected $fillable = [
      'id',
      'department',
      'manager',
      'sectionChief'
    ];

    protected $table = 'affiliation';

    protected $dates = ['deleted_at'];

    public $timestamps = false;
}
