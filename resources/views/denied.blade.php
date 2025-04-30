<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCESS DENIED</title>
</head>
<body>
    <div class="container text-center mt-5">
    <h1 class="text-danger">403 - Akses Ditolak</h1>
    <p class="mt-3">Anda tidak memiliki izin untuk mengakses halaman ini.</p>
    @if (session('error'))
        <div class="alert alert-danger mt-3">
            {{ session('error') }}
        </div>
    @endif
    <a href="{{ route('login') }}" class="btn btn-primary mt-4">Kembali ke Login</a>
</div>
</body>
</html>