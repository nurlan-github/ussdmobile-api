<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universal extends Model
{
    use HasFactory;

    protected $table = 'universal';
      protected $guarded = [];
      public $timestamps = false;
    // protected $fillable = [

    // ];
}
