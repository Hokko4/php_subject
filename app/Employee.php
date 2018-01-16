<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    // employee table
    use SoftDeletes;

    protected $fillable = [
      'name',
      'done',
    ];

    //明示的にテーブル名を指定する
    protected $table = 'employee';
}
