@extends('layouts.layout')
@section('title', 'Ekskul')
@section('content')

<div class="d-flex mt-5">
            <div>
                <span class="text-uppercase d-block " style="font-size: 90px; font-weight: 500; line-height: 90px; font-family: Playfair Display; color: #2E6E65; width:500px" >
                    LIST OF EXCUL
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
                <img src="{{asset('images/uu.png')}}" alt="" style="height: 400px; widht: 450px; border-radius: 20px; ">
            <div class="adun" style="display: flex; justify-content: space-between; width: 100%;">
                <div class="ms-4">
                    <img src="{{ asset('images/clover.png') }}" alt="" style="width: 100px; height:100px;">
                    <img src="{{ asset('images/clover.png') }}" alt="" style="width: 100px; height:100px;">
                </div>
                <div class="ms-6">
                    <img src="{{ asset('images/clover.png') }}" alt="" style="width: 100px; height:100px;">
                    <img src="{{ asset('images/clover.png') }}" alt="" style="width: 100px; height:100px;">
                </div>
            </div>
            </div>
        </div>

        

@endsection