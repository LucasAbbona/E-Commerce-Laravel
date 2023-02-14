<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel E-Commerce</title>
    <link rel="stylesheet" href="../styles/layout.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://yt3.googleusercontent.com/klDOtiZcDUoL1_LhzrG2lu2ukbAyk-Upro1DmTUWUy7T_vWs_0h2Dp4wHVtP62C0w6JKa9ao=s900-c-k-c0x00ffffff-no-rj" type="image/x-icon">
    @livewireStyles
</head>
<body>
    <nav class="NavBar">
        <div>
            <img src="https://cdn.shopify.com/assets/images/logos/shopify-bag.png" width="80px" alt="">
        </div>
        <div class="Links">
                <a href="/">Home</a>
                <a href="/shop">Shop</a>
                <a href="/collections">Collections</a>
        </div>
        <div class="UserIcons">
            @unless (auth()->check())
            <a href="/register" class="RegisterBtn">Register</a>
            <a href="/login" class="LoginBtn">Login</a>
            @endunless
            @auth
            <a href="/favourites"><i class="bi bi-heart"></i></a>
            <a href="/logout" class="OutBtn">Logout</a>
            <a href="/cart"><i class="bi bi-cart3"></i></a>
            @endauth
            
        </div>
    </nav>
@if (session()->has('success'))
    <div class="Alert">
        <div class="AlertSuccess">
            {{session('success')}}
        </div>
    </div>
@endif
    {{$slot}}

    <footer class="Footer">
        <p>© {{date('Y')}} Lucas Abbona. Todos los derechos reservados.</p>
    </footer>
</body>
</html>