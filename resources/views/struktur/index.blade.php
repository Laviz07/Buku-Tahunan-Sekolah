@extends('layouts.layout')
@section('title', 'Struktur Sekolah')
@section('content')

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap">

<style>
    .img{
        display: block;
        width: 450px;
        margin: auto;
        border-radius: 30px;
    }
    .h1 {
        position: absolute;
        left: 30px;
        font-family: 'Playfair Display', serif;
        font-weight: 600;
        font-style: normal;
        line-height: normal;
        color: #2E6E65;
    }
    .h2 {
        position: absolute;
        left: 30px;
        font-family: 'Playfair Display', serif;
        font-weight: 400;
        color: #2E6E65;
    }
    .desc {
        position: absolute;
        width: 600px;
        left: 30px;
        font-family: 'Playfair Display', serif;
        font-weight: 400;
        font-size: 17px;
        color: #2E6E65;
    }
    .custom-button {
        background-color: #2E6E65; /* Warna hijau */
        color: white;
        padding: 10px 20px; /* Atur ukuran padding sesuai kebutuhan */
        font-size: 16px;
        position: absolute;
        left: 30px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px; /* Atur jarak antara tombol dan teks */
    }
    a {
        text-decoration: none;
        font-family: 'Playfair Display', serif;
        color: white;
    }
    .headmaster-text {
        font-size: 24px;
        margin-top: 150px;
        text-align: center;
        font-family: 'Roboto Slab', serif;
        font-weight: 500;
    }
</style>

    <div class="container">
        <img class="img" src="{{asset('smkn1.jpeg')}}" alt="smkn1">
        <br>
        <div class="text">
            <div class="h1">SCHOOL STRUCTURE</div>
            <br>
            <br>
            <div class="h2">SMKN 1 KOTA BEKASI</div>
            <br>
            <br>
            <p class="desc">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu mauris consectetur sem tempus elementum.”</p>
        </div>
        <br>
        <br>
        <button class="custom-button">
            <a href="">Lets see our teacher</a>
        </button>
    </div>

    <div class="content-container">
        <h2 class="headmaster-text">Our Headmaster</h2>
        
    </div>
@endsection