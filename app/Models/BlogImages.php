<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogImages extends Model
{
    protected $table='blogallery';
    protected $primaryKey='id';
    protected $fillable=['blog_id','image'];
}
