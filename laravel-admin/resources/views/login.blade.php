<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link href="{{ asset('sb-admin-2/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-5">
                        <h1 class="h4 text-gray-900 text-center mb-4">Login Users</h1>
                        @if (session('gagal'))
                            <div class="alert alert-danger">{{ session('gagal') }}</div>
                        @endif
                        <form method="post" action="/login">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="Masukkan Email" value="{{ old('email') }}">
                                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror" placeholder="Password">
                                @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
