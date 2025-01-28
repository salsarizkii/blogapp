<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Blog extends Model
{
 protected $fillable = ['title', 'slug', 'author', 'body'];
};

