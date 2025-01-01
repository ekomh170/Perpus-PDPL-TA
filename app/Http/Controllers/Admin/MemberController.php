<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        // Mengambil instance singleton dari model Member
        $memberInstance = Member::getInstance();

        // Mengambil semua data anggota dengan relasi user
        $members = $memberInstance->with('user')->get();

        // Mengirim data ke view
        return view('admin.members.index', compact('members'));
    }


    public function create()
    {
        // Menampilkan form tambah anggota
        $memberInstance = Member::getInstance();
        $members = $memberInstance->all();
        return view('admin.members.create', compact('members'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|unique:members,email',
            'telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        // Buat akun user terlebih dahulu
        $user = \App\Models\User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt('123'), // Password default
            'role' => 'member', // Role default untuk member
        ]);

        // Ambil instance singleton dari Member
        $memberInstance = Member::getInstance();

        // Buat data member
        $memberInstance->create([
            'user_id' => $user->id, // Relasi ke tabel users
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.members.index')->with('success', 'Member dan akun berhasil ditambahkan!');
    }

    public function show($id)
    {

        // Menampilkan detail anggota
        $memberInstance = Member::getInstance();
        $memberInstance = Member::All();
        $members = $memberInstance->findOrFail($id);
        return view('admin.members.show', compact('members'));
    }

    public function edit($id)
    {
        // Menampilkan form edit anggota
        $memberInstance = Member::getInstance();
        $members = $memberInstance->findOrFail($id);
        return view(
            'admin.members.edit',
            array_merge(compact('members'), ['member' => $members])
        );
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:members,email,' . $id,
            'telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        // Ambil instance dari Member menggunakan singleton
        $memberInstance = Member::getInstance();

        // Cari anggota berdasarkan ID
        $member = $memberInstance->findOrFail($id);

        // Ambil data dari request
        $data = $request->only(['nama', 'email', 'telepon', 'alamat', 'status']);
        $data['user_id'] = $member->user_id; // Atur user_id ke nilai yang sudah ada

        // Update data anggota
        $member->update($data);

        return redirect()->route('admin.members.index')->with('success', 'Member updated successfully!');
    }

    public function destroy($id)
    {
        // Ambil instance dari Member menggunakan singleton
        $memberInstance = Member::getInstance();

        // Cari anggota berdasarkan ID
        $member = $memberInstance->findOrFail($id);

        // Hapus user terkait secara manual
        if ($member->user) {
            $member->user()->delete(); // Hapus data user terkait
        }

        // Hapus data anggota
        $member->delete();

        return redirect()->route('admin.members.index')->with('success', 'Member dan user terkait berhasil dihapus!');
    }



    public function toggleStatus($id)
    {
        // Ambil anggota berdasarkan ID
        $memberInstance = Member::getInstance();
        $member = $memberInstance->findOrFail($id);

        // Ubah status anggota
        $member->status = $member->status === 'active' ? 'inactive' : 'active';
        $member->save();

        return redirect()->route('admin.members.index')
            ->with('success', 'Status anggota berhasil diperbarui.');
    }
}
