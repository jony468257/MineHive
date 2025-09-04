<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgencySection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en', 'title_bn',
        'subtitle_en', 'subtitle_bn',
        'description_en', 'description_bn',
        'image', 'video_link'
    ];
}
