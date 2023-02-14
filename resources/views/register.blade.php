<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce | Register</title>
    <link rel="stylesheet" href="./styles/register.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <div class="RegisterBack">
        <div class="RegisterContent">
        <h2>Welcome!!</h2>
        <p class="Message">Sign up so you can start selling and buying products.</p>
        <p class="Replica">Shopify Replica</p>
        </div>
        <div class="RegisterForm">
            <h3>Register</h3>
            <p>Complete all the fields to create a new user.</p>
            <form action="/register-new-user" method="post">
                @csrf
                <label for="">Username</label>
                <input value="{{old('username')}}" type="text" name="username">
                @error('username')
                    <p class="ErrorMessage"><i class="bi bi-exclamation-circle"></i> {{$message}}</p>
                @enderror
                <label for="">E-mail</label>
                <input type="text" value="{{old('email')}}" name="email">
                @error('email')
                    <p class="ErrorMessage"><i class="bi bi-exclamation-circle"></i> {{$message}}</p>
                @enderror
                <label for="">Password</label>
                <input type="password" name="password">
                @error('password')
                    <p class="ErrorMessage"><i class="bi bi-exclamation-circle"></i> {{$message}}</p>
                @enderror
                <label for="">Confirm Password</label>
                <input type="password" name="password_confirmation">
                @error('password')
                    <p class="ErrorMessage"><i class="bi bi-exclamation-circle"></i> {{$message}}</p>
                @enderror
                <button type="submit">Sign Up</button>
            </form>
            <a href="/" class="HomeLink">Homepage</a>
            <a href="/login" class="LinkLogin">I already have an account.</a>
        </div>
    </div>
</body>
</html>