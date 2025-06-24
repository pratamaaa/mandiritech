<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function indexBasic()
    {
        $products = Product::where('category', 'basic')->latest()->get();
        return view('admin.products.basic', compact('products'));
    }

    public function indexAudio()
    {
        $products = Product::where('category', 'audio')->latest()->get();
        return view('admin.products.audio', compact('products'));
    }

    public function indexColourVU()
    {
        $products = Product::where('category', 'colourvu')->latest()->get();
        return view('admin.products.colourvu', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required|string|max:255',
            'detail_kamera' => 'required|string|max:255',
            'paket' => 'required|string|max:255',
            'price' => 'required|numeric',
            'spek' => 'required|string',
            'detail' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'category' => 'required|string',
        ]);

        $data = $request->only(['merk', 'price', 'spek', 'detail', 'category', 'detail_kamera', 'paket']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('produk', 'public');
        }

        \Log::info('Data akan disimpan:', $data);

        $product = Product::create($data);

        \Log::info('Data setelah create:', $product->toArray());

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan');
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->image && Storage::exists('public/' . $product->image)) {
            Storage::delete('public/' . $product->image);
        }

        $product->delete();

        return redirect()->back()->with('success', 'Produk berhasil dihapus.');
    }

}
