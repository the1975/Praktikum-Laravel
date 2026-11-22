@extends('dashboard')
@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <form method="post" action="/admin/{{ $admin->id_admin }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username', $admin->username) }}">
                @error('username')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="password">Password baru (kosongkan jika tidak diubah)</label>
                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror">
                @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/admin" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
