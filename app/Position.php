<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
    //position table
    use SoftDeletes;

    protected $fillable = [
      'id',
      'position'
    ];

    protected $table = 'position';

    protected $dates = ['deleted_at'];

    public $timestamps = false;

    public function employee()
    {
      return $this->belongsTo('Employee');
    }
}
