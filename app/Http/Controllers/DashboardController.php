<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Karyas;
use App\Models\Beritas;
use App\Models\Galeris;
use App\Models\Reviews;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalKarya = Karyas::count();
        $totalBerita = Beritas::count();
        $totalGaleri = Galeris::count();

        $averageRating = number_format(Reviews::avg('rating') ?? 0, 1);

        $totalReviews = Reviews::count();

        return view('admin.dasbor', compact('totalKarya', 'totalBerita', 'totalGaleri', 'averageRating', 'totalReviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
