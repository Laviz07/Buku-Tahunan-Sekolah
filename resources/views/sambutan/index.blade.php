@extends('layouts.layout')
@section('title', 'Sambutan')
@section('content')  
    {{-- <div class="container mt-4 mb-4">sambitan</div> --}}
    <style>
    
    </style>
    <div class="smbtn1">
        <h2 class="text-uppercase mt-1 d-block " style="font-size: 30px;  font-family: Playfair Display; color: #2E6E65;">
            BUKU TAHUNAN DIGITAL
        </h2>
        <img src="{{ asset('smkn1.jpg') }}" alt="smkn1">
        <h2 class="text-uppercase mt-1 d-block " style="font-size: 30px;  font-family: Playfair Display; color: #2E6E65; font-weight: bold;">
            SMKN 1 KOTA BEKASI ANGKATAN 25
        </h2>
        <div class="btn">
            <button class="btn btn-primary">
                SCROLL DOWN
            </button>
            <button class="btn btn-primary">
                ABOUT
            </button>
        </div>
    </div>


@endsection