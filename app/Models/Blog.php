<?php

namespace App\Models;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Blog extends Model
{

    public $table = 'blogs';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'title', 'details','category_id'
    ];


    public function category(){
        return $this->belongsTo(CategoryBlog::class,'category_id','id');
    }
}
