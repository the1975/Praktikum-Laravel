@extends('dashboard')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Admin</h6>
        <a href="/admin/create" class="btn btn-primary btn-sm">Tambah Admin</a>
    </div>
    <div class="card-body">
        @if (session('sukses'))
            <div class="alert alert-success">{{ session('sukses') }}</div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($admins as $row)
                    <tr>
                        <td>{{ $row->id_admin }}</td>
                        <td>{{ $row->username }}</td>
                        <td>{{ $row->created_at }}</td>
                        <td class="text-nowrap">
                            <a href="/admin/{{ $row->id_admin }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <form method="post" action="/admin/{{ $row->id_admin }}" class="d-inline" onsubmit="return confirm('Hapus admin ini?')">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="4" class="text-center">Belum ada data</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
