<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="{{ asset('css/customLogin.css') }}">
</head>
<body>
    <div class="logo">
        <img src="img/logo.png" alt="Logo">
    </div>
    <div class="container">
        <div class="login-form">
            <ul class="nav">
                <li><a href="{{ route('login') }}">Sign In</a></li>
                <li class="active">Sign Up</li>
            </ul>
            <form method="POST" action="{{ route('signupPost') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Alamat email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password">Konfirmasi Password</label>
                    <input type="password" id="password" name="password_confirmation" required>
                </div>
                <div class="form-group" style="margin-bottom: 5px ">
                    <button type="submit">Daftar</button>
                </div>
                <div class="form-group">
                    <a href="#" class="forgot-password">Lupa Password</a>
                </div>
                <div class="form-group">
                    <span class="atau">Atau</span>
                </div>
                <div class="form-group">
                    <a class="google-login" href="{{ route('authGoogle') }}">
                        <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google Logo">
                        Daftar dengan Google
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
