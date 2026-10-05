<?php

namespace App\Http\Controllers;

use App\Models\Beritas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $beritas = Beritas::when($request->search, function ($query) use ($request) {
        $query->where('judulberita', 'like', '%' . $request->search . '%');
    })->latest()->get();

    return view('admin.kelolaberita', compact('beritas'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.postingberita');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judulberita' => 'required',
            'deskripsiberita' => 'required',
            'gambarberita' => 'nullable|image|mimes:png,jpg,webp|max:5012',
        ]);

        $imagePath = null;

        if ($request->hasFile('gambarberita')) {
            $imagePath = $request->file('gambarberita')->store('berita', 'public');
        }

        Beritas::create([
            'judulberita' => $request->judulberita,
            'deskripsiberita' => $request->deskripsiberita,
            'gambarberita' => $imagePath,
        ]);

        return redirect()->route('berita')->with('success', 'Berita berhasil diposting!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id) {
        $beritas = Beritas::findOrFail($id);
        return view('admin.detailberita', compact('beritas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $beritas = Beritas::findOrFail($id);
        return view('admin.editberita', compact('beritas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judulberita' => 'required',
            'deskripsiberita' => 'required',
            'gambarberita' => 'nullable|image|mimes:png,jpg,webp|max:5012',
        ]);

        $beritas = Beritas::findOrFail($id);

        if ($request->hasFile('gambarberita')) {
            if ($beritas->gambarberita && Storage::disk('public')->exists($beritas->gambarberita)) {
                Storage::disk('public')->delete($beritas->gambarberita);
            }
            $beritas->gambarberita = $request->file('gambarberita')->store('berita', 'public');
        }

        $beritas->judulberita = $request->judulberita;
        $beritas->deskripsiberita = $request->deskripsiberita;
        $beritas->save();

        return redirect()->route('berita')->with('success', 'Berita berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $beritas = Beritas::findOrFail($id);

        if ($beritas->gambarberita && Storage::disk('public')->exists($beritas->gambarberita)) {
            Storage::disk('public')->delete($beritas->gambarberita);
        }

        $beritas->delete();

        return redirect()->route('berita')->with('success', 'Berita berhasil dihapus!');
    }
}
