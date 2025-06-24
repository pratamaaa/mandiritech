<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
    'merk',
    'spek',
    'price',
    'detail',
    'image',
    'category',
    'detail_kamera',
    'paket',
];

}
