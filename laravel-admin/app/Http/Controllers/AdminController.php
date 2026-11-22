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
}
