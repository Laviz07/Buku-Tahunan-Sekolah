@extends('layouts.layout')
@section('title', 'Detail Kelas')
@section('content')  
    <div class="container mt-4 mb-4">
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
                {{-- <div class=" rounded ms-5  " style="background-color:#D9D9D9; width:600px; height:300px ">
                </div> --}}
                <img src="{{ asset('images/test1.jpg') }}" alt="" class="rounded ms-5 " style=" width:600px; height:300px " >
            
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

        <div class=" mt-5">
            <div class="d-flex align-items-center justify-content-center">
                <img src="{{ asset('images/daun_polos.png') }}" alt="" style="width: 90px; height: 90px;">
                <span class="text-uppercase fw-bolder" style="font-family: Playfair Display; font-size: 30px;">
                    our class teacher
                </span>
                <img src="{{ asset('images/daun_polos.png') }}" alt="" style="width: 90px; height: 90px; transform: rotate(90deg);">
            </div>
            
            <div class="mt-3 d-flex ">
                <div style="">

                </div>
            </div>
        </div>
        
    </div>
@endsection