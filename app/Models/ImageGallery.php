<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageGallery extends Model
{
    protected $table='tblgallery';
    protected $primaryKey='id';
    protected $fillable=['properties_id','image'];
}
