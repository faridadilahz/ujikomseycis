<?php

namespace App\Http\Controllers;

use App\Models\Galeris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalerisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $galeris = Galeris::when($request->search, function ($query) use ($request) {
        $query->where('judulgaleri', 'like', '%' . $request->search . '%');
    })->latest()->get();

    return view('admin.kelolagaleri', compact('galeris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.postinggaleri');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judulgaleri' => 'required',
            'gambargaleri' => 'required|image|mimes:png,jpg,webp|max:5012'
        ]);

        $imagePath = $request->file('gambargaleri')->store('galeri', 'public');

        Galeris::create([
            'judulgaleri' => $request->judulgaleri,
            'gambargaleri' => $imagePath
        ]);

        return redirect()->route('galeri')->with('success', 'Galeri berhasil diposting!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $galeris = Galeris::findOrFail($id);
        return view('admin.detailgaleri', compact('galeris'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $galeris = Galeris::findOrFail($id);
        return view('admin.editgaleri', compact('galeris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judulgaleri' => 'required',
            'gambargaleri' => 'nullable|image|mimes:png,jpg,webp|max:5012'
        ]);

        $galeris = Galeris::findOrFail($id);

        if ($request->hasFile('gambargaleri')) {
            if ($galeris->gambargaleri && Storage::disk('public')->exists($galeris->gambargaleri)) {
                Storage::disk('public')->delete($galeris->gambargaleri);
            }

            $galeris->gambargaleri = $request->file('gambargaleri')->store('galeri', 'public');
        }

        $galeris->judulgaleri = $request->judulgaleri;
        $galeris->save();

        return redirect()->route('galeri')->with('success', 'Galeri berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $galeris = Galeris::findOrFail($id);
        $galeris->delete();

        return redirect()->route('galeri')->with('success', 'Berita berhasil dihapus!');
    }
}
