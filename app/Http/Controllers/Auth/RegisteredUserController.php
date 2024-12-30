<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi input
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Membuat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'member',  // Set role user sebagai member
        ]);

        // Menambahkan data member terkait dengan user
        $member = Member::create([
            'user_id' => $user->id,  // Menyimpan user_id untuk relasi dengan tabel users
            'nama' => $request->name,
            'email' => $request->email,
            'status' => 'active', // Status default untuk member baru
        ]);

        // Memicu event Registered (untuk pengiriman email atau proses lainnya)
        event(new Registered($user));

        // Melakukan login otomatis setelah registrasi
        Auth::login($user);

        // Mengarahkan pengguna ke dashboard setelah login berhasil
        return redirect()->route('dashboard');
    }
}
