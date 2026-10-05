<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index() {
        $user = Auth::user();

        return view('admin.profil', compact('user'));
    }

    public function kelolakatasandi() {
        $user = Auth::user();

        return view('admin.kelolakatasandi', compact('user'));
    }

    public function ubahkatasandi() {
        return view('admin.ubahkatasandi');
    }

    public function updatekatasandi(Request $request) {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'current_password.required' => 'Kata sandi saat ini wajib diisi.',
            'password.required' => 'Kata sandi baru wajib diisi.',
            'password.min' => 'Kata sandi minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi kata sandi tidak cocok.',
        ]);

        if(!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Kata sandi saat ini salah!']);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('admin.kelolakatasandi')->with('success', 'Kata sandi berhasil diperbarui!');
    }

    public function ubahprofil() {
        $user = Auth::user();
        return view('admin.ubahprofil', compact('user'));
    }

    public function editprofil(Request $request) {
    /** @var \App\Models\User $user */    
    $user = Auth::user();

    $request -> validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'max:255', 'unique:users,email,' . $user->id],
    ], [
        'name.required' => 'Username wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
    ]);

    $user->name = $request->name;
    $user->email = $request->email;
    $user->save();

    return redirect()->route('profil')->with('success', 'Profil berhasil diperbarui!');
    }
}
