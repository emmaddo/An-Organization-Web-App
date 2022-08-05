<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dues extends Model
{
    use HasFactory;protected $table='Dues';
    protected $fillable=[
    'name',
    'email',
    'amount',
    'month',
    'year',
    'remarks'
    ];   
}