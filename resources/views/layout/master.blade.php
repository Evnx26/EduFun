<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link rel="stylesheet" href="{{ asset('boostrap5/css/bootstrap.min.css') }}">

    <style>
        .nav-link{
            color: black;
        }
        .nav-link:hover{
            text-decoration: underline;
            color: blue;
        }
        .background-custom {
            background-color: beige;
            padding: 50px 0;
        }
    </style>

</head>
<body>
    <div class="container-fluid">
        {{-- Navbar --}}
        @include('layout.menu')
        {{-- Konten --}}
        <div class="background-custom">
            @yield('konten')
        </div>
        {{-- Footer --}}
        @include('layout.footer')
    </div>
</body>
</html>