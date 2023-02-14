<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce | Login</title>
    <link rel="stylesheet" href="./styles/register.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <div class="LoginBack">
        <div class="LoginContainer">
            <form action="/login-user" method="POST">
                @csrf
                <label for="">Username</label>
                <input value="{{old('loginusername')}}" type="text" name="loginusername" id="">
                @error('loginusername')
                    <p class="ErrorMessage"><i class="bi bi-exclamation-circle"></i> {{$message}}</p>
                @enderror
                <label for="">Password</label>
                <input type="password" name="loginpassword">
                @error('loginpassword')
                    <p class="ErrorMessage"><i class="bi bi-exclamation-circle"></i> {{$message}}</p>
                @enderror
                <button type="submit">Login</button>
                <a class="RegisterLink" href="/register">I Don't have an account</a>
            </form>
            
        </div>
        <div class="LoginContent">
            <h3>Welcome Back</h3>
            <p>Login into your account to start buying some high quality clothes.</p>
        </div>
    </div>
</body>
</html>