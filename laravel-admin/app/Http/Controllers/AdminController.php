<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'judul' => 'Data Admin',
            'admins' => Admin::all(),
        ]);
    }

    public function create()
    {
        return view('admin.create', ['judul' => 'Tambah Admin']);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|max:100',
            'password' => 'required|min:6|max:100',
        ]);

        Admin::create($data);

        return redirect('/admin')->with('sukses', 'Data admin berhasil ditambahkan');
    }

    public function edit(Admin $admin)
    {
        return view('admin.edit', [
            'judul' => 'Edit Admin',
            'admin' => $admin,
        ]);
    }

    public function update(Request $request, Admin $admin)
    {
        $data = $request->validate([
            'username' => 'required|max:100',
            'password' => 'nullable|min:6|max:100',
        ]);

        if (empty($data['password'])) {
            unset($data['password']);
        }

        $admin->update($data);

        return redirect('/admin')->with('sukses', 'Data admin berhasil diubah');
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect('/admin')->with('sukses', 'Data admin berhasil dihapus');
    }
}
