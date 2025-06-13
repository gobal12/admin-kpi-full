<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - KPI PT Nutech Integrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('/images/bg.jpg') no-repeat center center fixed;
            background-size: contain;
            min-height: 95vh;
            display: flex;
            flex-direction: column; 
            align-items: flex-end;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }
        .card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }
        .logo {
            max-height: 80px;
        }
        /* Styling Header */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #ffffff;
            color: black; 
            padding: 15px 0;
            text-align: center;
            z-index: 1000;
        }
        .header a {
            color: black;
            text-decoration: none;
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #007bff;
        }
        .header a:hover {
            background-color: #0056b3;
        }
        /* Styling Footer */
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #ffffff; /* Set footer to white */
            color: black; /* Ensure text color contrasts well */
            text-align: center;
            padding: 10px;
        }
        /* Ensure form is not overlapped by footer */
        .container {
            margin-bottom: 100px; /* Adjust to prevent form overlap */
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <a href="https://www.nutech-integrasi.com" target="_blank">Kunjungi Web Perusahaan</a>
    </div>

    <div class="container mt-5 pt-5">
        <div class="row justify-content-end">
            <div class="col-md-6 col-lg-5">
                <div class="card p-4">
                    <div class="text-center mb-3">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo Nutech" class="logo mb-3">
                        <h4 class="fw-bold">Sistem Penilaian KPI</h4>
                        <p class="text-muted">PT Nutech Integrasi</p>
                    </div>

                    {{-- Form Login --}}
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="form-check mb-3">
                            <input id="remember_me" class="form-check-input" type="checkbox" name="remember">
                            <label for="remember_me" class="form-check-label">Remember me</label>
                        </div>

                        <div class="d-flex justify-content-between">
                            @if (Route::has('password.request'))
                                <a class="text-decoration-none" href="{{ route('password.request') }}">Forgot your password?</a>
                            @endif
                            <button type="submit" class="btn btn-primary">Log in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <small>&copy; {{ date('Y') }} PT Nutech Integrasi | All Rights Reserved</small>
    </footer>
</body>
</html>
