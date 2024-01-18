@extends('layouts.layout')
@section('title', 'Sambutan')
@section('content')  
    {{-- <div class="container mt-4 mb-4">sambitan</div> --}}
    <style>
        img{
            width: 1030px;
            height: 325px;
            object-fit: cover;
            border-radius: 20px;
            margin-bottom: 13px;
        }
        .custom-button {
            background-color: #2E6E65; /* Warna hijau */
            color: white;
            padding: 10px 20px; /* Atur ukuran padding sesuai kebutuhan */
            margin-right: 10px;
            font-size: 16px;
            left: 135px;
            border: none;
            border-radius: 40px;
            cursor: pointer;
            margin-top: 20px; /* Atur jarak antara tombol dan teks */
        }
        a {
            text-decoration: none;
            font-family: 'Playfair Display', serif;
            color: white;
        }
    </style>
    <div class="smbtn1">
        <h2 class="text-uppercase mt-1 d-block " style="font-size: 30px;  font-family: Playfair Display; color: #2E6E65; margin-bottom: 13px;">
            BUKU TAHUNAN DIGITAL
        </h2>
        <img src="{{ asset('images/test1.jpg') }}" alt="smkn1">
        <br>
        <h2 class="text-uppercase mt-1 d-block " style="font-size: 30px;  font-family: Playfair Display; color: #2E6E65; font-weight: bold;">
            SMKN 1 KOTA BEKASI ANGKATAN 25
        </h2>
        <div style="display: flex;">
            <button class="custom-button">
                <a href="">SCROLL DOWN</a>
            </button>
            <button class="custom-button">
                <a href="">ABOUT</a>
            </button>
        </div>
    </div>


@endsection