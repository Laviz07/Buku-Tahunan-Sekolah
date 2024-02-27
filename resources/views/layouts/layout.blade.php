<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="icon" href="{{ asset('/images/logo.png') }}">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>@yield('title')</title>
    @yield('header')

    <style>
        body {
            background-color: #F4F9F4;
        }

        .navbar {
            font-family: 'Inter', sans-serif;
            /* position: -webkit-sticky;
      position: sticky;
      top: 0; */
        }

        .navbar-nav li a {
            color: #2E6E65;
            font-size: 16px;
            font-weight: 700;
        }

        .navbar-nav li a:hover {
            color: #A7D7C5;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark ps-4 pe-4" style="background-color: #F4F9F4;">
        <div class="container-fluid">
            <a class="navbar-brand text-uppercase fw-bold  " style="color: #2E6E65;" href="#">
                {{-- <i class="bi bi-building" style="font-size: 20px;" ></i> --}}
                NAMA SEKOLAH
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav fw-light">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase " href="{{ url('/') }}">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase " href="{{ url('guru') }}">teacher</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase " href="{{ route('kelas') }}">class</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase " href="{{ url('ekskul') }}">excul</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase " href="{{ url('about') }}">about</a>
                    </li>
                    {{-- <li class="nav-item dropdown"> --}}
                    {{-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a> --}}
                    {{-- <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Link</a></li>
            <li><a class="dropdown-item" href="#">Another link</a></li>
            <li><a class="dropdown-item" href="#">A third link</a></li>
          </ul> --}}
                    {{-- </li> --}}
                </ul>
            </div>
        </div>
    </nav>

    <div class="">
        @include('layouts.flashMessage')
        @yield('content')
    </div>


</body>

<footer>
    @yield('footer')
</footer>


</body>

</html>
