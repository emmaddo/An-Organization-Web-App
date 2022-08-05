<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table='News';
    protected $fillable=[
    'title',
    'intro',
    'content',
    'image_name',
    'status'    
    ];
}
