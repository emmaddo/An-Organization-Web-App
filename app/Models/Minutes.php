<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minutes extends Model
{
    protected $table='Minutes';
    protected $fillable=[
    'topic',
    'content',
    'image_name'
    ];
}