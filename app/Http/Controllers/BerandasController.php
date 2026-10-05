<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyas;
use App\Models\Beritas;
use App\Models\Galeris;
use App\Models\Reviews;

class BerandasController extends Controller
{
    public function showBeranda()
    {
        $beritas = Beritas::latest()->take(3)->get();
        $galeris = Galeris::latest()->take(3)->get();
        $karyas = Karyas::latest()->take(3)->get();

        return view('guest.beranda', compact('beritas', 'galeris', 'karyas'));
    }


    public function karya()
    {
        $karyas = Karyas::latest()->get();
        return view('guest.karya', compact('karyas'));
    }

    public function berita()
    {
        $beritas = Beritas::latest()->get();
        return view('guest.berita', compact('beritas'));
    }

    public function galeri()
    {
        $galeris = Galeris::latest()->get();
        return view('guest.galeri', compact('galeris'));
    }

    public function showKarya($id)
    {
        $karyas = Karyas::findOrFail($id);
        return view('guest.detailkarya', compact('karyas'));
    }

    public function showBerita($id)
    {
        $beritas = Beritas::findOrFail($id);
        return view('guest.detailberita', compact('beritas'));
    }

    public function showGaleri($id)
    {
        $galeris  = Galeris::findOrFail($id);
        return view('guest.detailgaleri', compact('galeris'));
    }

    public function storeReview(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Reviews::create([
            'rating' => $request->rating,
        ]);

        return back()->with('success', 'Terima kasih! Rating Anda berhasil dikirim.');
    }
}
