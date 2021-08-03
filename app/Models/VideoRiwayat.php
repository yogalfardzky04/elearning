<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoRiwayat extends Model
{
    use HasFactory;

    protected $table = "video_riwayat";

    protected $fillable = [
        'video_id',
        'user_id'
    ];
}
