<?php

namespace App\Models;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class BlogComment extends Model
{

    public $table = 'blogcomment';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'bolg_id', 'comment', 'name', 'email', 'website'
    ];
}
