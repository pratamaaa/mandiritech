<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AdminAuthController;
use Illuminate\Http\Request;
use App\Models\Gallery;

class HomeController extends Controller
{

public function index() {
    $galleries = Gallery::latest()->take(6)->get();
    return view('homepage', compact('galleries'));
}


    public function kontak() {
    return view('kontak');
    }

    public function galeri() {
    $galleries = Gallery::all();
    return view('galeri', compact('galleries'));
    }
    
    public function cctvBasic() {
        $brands = ['Hikvision', 'Dahua', 'Hilook'];

    $productsByBrand = [];

    foreach ($brands as $brand) {
        $productsByBrand[$brand] = \App\Models\Product::where('category', 'basic')
            ->where('merk', $brand)
            // ->latest()
            ->get();
    }

    return view('produk.cctv', compact('brands', 'productsByBrand'));
    }

    public function cctvAudio() {
        $brands = ['Hikvision', 'Dahua', 'Hilook'];

    $productsByBrand = [];

    foreach ($brands as $brand) {
        $productsByBrand[$brand] = \App\Models\Product::where('category', 'audio')
            ->where('merk', $brand)
            // ->latest()
            ->get();
    }

    return view('produk.cctvaudio', compact('brands', 'productsByBrand'));
    }

    public function cctvColourVu() {
        $brands = ['Hikvision', 'Dahua', 'Hilook'];

    $productsByBrand = [];

    foreach ($brands as $brand) {
        $productsByBrand[$brand] = \App\Models\Product::where('category', 'colourvu')
            ->where('merk', $brand)
            // ->latest()
            ->get();
    }

    return view('produk.cctvcolourvu', compact('brands', 'productsByBrand'));
    }
}
