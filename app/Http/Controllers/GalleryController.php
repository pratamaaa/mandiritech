<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin;


class GalleryController extends Controller
{
    public function galeri() {
    $galleries = Gallery::all();
    return view('gallery', compact('galleries'));
}
}
