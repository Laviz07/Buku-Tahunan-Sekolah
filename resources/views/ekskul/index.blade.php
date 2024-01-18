@extends('layouts.layout')
@section('title', 'Ekskul')
@section('content')
<style>
    .img{
        display: block;
        width: 300px;
        margin: auto;
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
</style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap">
<div class="d-flex mt-5">
            <div>
                <span class="text-uppercase d-block " style="font-size: 90px; font-weight: 500; line-height: 90px; font-family: Playfair Display; color: #2E6E65; width:500px" >
                    xii rpl a gallery
                </span>

                <span class="text-uppercase mt-1 d-block " style="font-size: 20px;  font-family: Playfair Display; color: #2E6E65;">
                   xii rekayasa perangkat lunak a
                </span>

                <span class="mt-5 d-block fst-italic " style="color:#2B3752; font-family: Playfair Display; width:400px;">
                    “Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Phasellus eu mauris consectetur sem tempus elementum.”
                </span>

                <a href="#daftar-kelas">
                    <div class="btn mt-4 ps-4 pe-4" style="background-color:#2E6E65; border-radius:15px; color:white; font-family: Playfair Display; font-size: 20px; ">
                        Let's look at the class
                    </div>
                </a>
            </div>

            <div>
                {{-- ini ceritanya caraousel tapi blm jadi --}}
                <div class=" rounded ms-5  " style="background-color:#D9D9D9; width:600px; height:300px ">
                </div>
            
                <div class="ms-4">
                    <img src="{{ asset('images/clover.png') }}" alt="" style="width: 100px; height:100px;">
                    <img src="{{ asset('images/clover.png') }}" alt="" style="width: 100px; height:100px;">
                    <img src="{{ asset('images/clover.png') }}" alt="" style="width: 100px; height:100px;">
                    <img src="{{ asset('images/clover.png') }}" alt="" style="width: 100px; height:100px;">
                    <img src="{{ asset('images/clover.png') }}" alt="" style="width: 100px; height:100px;">
                    <img src="{{ asset('images/clover.png') }}" alt="" style="width: 100px; height:100px;">
                </div>
            </div>
        </div>