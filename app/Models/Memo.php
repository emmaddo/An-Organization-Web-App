<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    protected $table='Memo';
    protected $fillable=[
    'topic',
    'content',
    'image_name'
    ];
}
