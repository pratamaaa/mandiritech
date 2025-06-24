<?php

namespace App\Http\Controllers\Admin;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\ProductController;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function galeri()
    {
        $galleries = Gallery::latest()->get();
        return view('admin.galeri', compact('galleries'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'nullable|string',
            'image' => 'required|image',
            'thumbnail' => 'required|image',
            'category' => 'required|in:perumahan,kantor,industri,ritel',
            'location' => 'required|string|max:50',
            'camera_brand' => 'required|string|max:30',
            'install_date' => 'nullable|date',
        ]);

        $validated['image'] = $request->file('image')->store('galleries', 'public');
        $validated['thumbnail'] = $request->file('thumbnail')->store('galleries/thumbnails', 'public');

        Gallery::create($validated);

        return redirect()->route('admin.galeri')->with('success', 'Data galeri berhasil ditambahkan');
    }

public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        Storage::disk('public')->delete([$gallery->image, $gallery->thumbnail]);

        $gallery->delete();
        return redirect()->route('admin.galeri')->with('success', 'Data galeri berhasil dihapus');
    }
}

