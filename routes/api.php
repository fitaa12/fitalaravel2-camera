<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- <div class="container">
            <a class="navbar-brand" href="{{ route('cameras.index') }}">Kembali ke Daftar Kamera</a>
        </div> -->
    </nav>

    <div class="container mt-4">
         @yield('content') 
    </div>

</body>
</html>