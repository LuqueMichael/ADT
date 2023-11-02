<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'vc_title',
        'vc_slug',
        'tx_content',
        'vc_cover',
        'in_userid'
    ];
}
