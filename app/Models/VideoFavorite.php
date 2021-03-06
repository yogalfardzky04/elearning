<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoFavorite extends Model
{
    use HasFactory;

    protected $table = "video_favorite";

    protected $fillable = [
        'video_id',
        'user_id'
    ];
}
