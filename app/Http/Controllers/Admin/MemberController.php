<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        // Menampilkan daftar anggota
        $memberInstance = Member::getInstance();
        $members = $memberInstance->all();
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
        // Menyimpan data anggota ke database (logika di sini)
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:members,email',
            'telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        $memberInstance = Member::getInstance();
        $memberInstance->create($request->all());

        return redirect()->route('admin.members.index')->with('success', 'Member added successfully!');
    }

    public function show($id)
    {
        // Menampilkan detail anggota
        $memberInstance = Member::getInstance();
        $members = $memberInstance->findOrFail($id);
        return view('admin.members.show', compact('members'));
    }

    public function edit($id)
    {
        // Menampilkan form edit anggota
        $memberInstance = Member::getInstance();
        $members = $memberInstance->findOrFail($id);
        return view('admin.members.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Update data anggota (logika di sini)
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:members,email,' . $id,
            'telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        $memberInstance = Member::getInstance();
        $memberInstance->findOrFail($id)->update($request->all());

        return redirect()->route('admin.members.index')->with('success', 'Member updated successfully!');
    }

    public function destroy($id)
    {
        // Hapus data anggota (logika di sini)
        $memberInstance = Member::getInstance();
        $memberInstance->findOrFail($id)->delete();

        return redirect()->route('admin.members.index')->with('success', 'Member deleted successfully!');
    }
}
