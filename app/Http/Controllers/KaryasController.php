<?php

namespace App\Http\Controllers;

use App\Models\Karyas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KaryasController extends Controller
{
    public function index(Request $request)
    {
        $karyas = Karyas::when($request->search, function ($query) use ($request) {
            $query->where('namakarya', 'like', '%' . $request->search . '%')
                ->orWhere('jurusan', 'like', '%' . $request->search . '%');
        })->latest()->get();

        return view('admin.kelolakarya', compact('karyas'));
    }

    public function create()
    {
        return view('admin.postingkarya');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namakarya' => 'required',
            'jurusan' => 'required',
            'deskripsikarya' => 'required',
            'gambarkarya' => 'nullable|image|mimes:png,jpg,webp|max:5012',
        ]);

        $imagePath = null;

        if ($request->hasFile('gambarkarya')) {
            $imagePath = $request->file('gambarkarya')->store('karya', 'public');
        }

        Karyas::create([
            'namakarya' => $request->namakarya,
            'jurusan' => $request->jurusan,
            'deskripsikarya' => $request->deskripsikarya,
            'gambarkarya' => $imagePath,
        ]);

        return redirect()->route('karya')->with('success', 'Karya berhasil diposting!');
    }

    public function show($id)
    {
        $karyas = Karyas::findOrFail($id);
        return view('admin.detailkarya', compact('karyas'));
    }

    public function edit($id)
    {
        $karyas = Karyas::findOrFail($id);
        return view('admin.editkarya', compact('karyas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'namakarya' => 'required',
            'jurusan' => 'required',
            'deskripsikarya' => 'required',
            'gambarkarya' => 'nullable|image|mimes:png,jpg,webp|max:5012',
        ]);

        $karyas = Karyas::findOrFail($id);

        if ($request->hasFile('gambarkarya')) {
            if ($karyas->gambarkarya && Storage::disk('public')->exists($karyas->gambarkarya)) {
                Storage::disk('public')->delete($karyas->gambarkarya);
            }
            $karyas->gambarkarya = $request->file('gambarkarya')->store('karya', 'public');
        }

        $karyas->namakarya = $request->namakarya;
        $karyas->jurusan = $request->jurusan;
        $karyas->deskripsikarya = $request->deskripsikarya;
        $karyas->save();

        return redirect()->route('karya')->with('success', 'Karya berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $karyas = Karyas::findOrFail($id);

        if ($karyas->gambarkarya && Storage::disk('public')->exists($karyas->gambarkarya)) {
            Storage::disk('public')->delete($karyas->gambarkarya);
        }

        $karyas->delete();

        return redirect()->route('karya')->with('success', 'Karya berhasil dihapus!');
    }
}
