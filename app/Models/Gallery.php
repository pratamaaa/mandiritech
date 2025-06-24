<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
    'title',
    'description',
    'image',
    'thumbnail',
    'category',
    'location',
    'camera_brand',
    'install_date'
];

    // Accessor untuk URL gambar
    public function getImageUrlAttribute() {
        return asset('storage/'.$this->image);
    }

    public function getThumbnailUrlAttribute() {
        return asset('storage/'.$this->thumbnail);
    }
}
