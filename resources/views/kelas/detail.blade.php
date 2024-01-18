@extends('layouts.layout')
@section('title', 'Detail Kelas')
@section('content')  
    <div class="container mt-4 mb-4">
        <div class="d-flex" style="height: 100vh;">
            <div>
                <span class="text-uppercase d-block " style="font-size: 90px; font-weight: 500; line-height: 90px; font-family: Playfair Display; color: #2E6E65; width:500px" >
                    xii rpl a gallery
                </span>

                <span class="text-uppercase mt-1 d-block " style="font-size: 20px;  font-family: Playfair Display; color: #2E6E65;">
                   xii rekayasa perangkat lunak a
                </span>

                <span class="mt-4 d-block fst-italic " style="color:#2B3752; font-family: Playfair Display; width:400px;">
                    “Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Phasellus eu mauris consectetur sem tempus elementum.”
                </span>

                <a href="#kelas">
                    <button class="btn mt-5 ps-4 pe-4" style="background-color:#2E6E65; border-radius:15px; color:white; font-family: Playfair Display; font-size: 20px; ">
                        Let's look at the class
                    </button>
                </a>
            </div>

            <div>
                <img src="{{ asset('images/test1.jpg') }}" alt="" class="rounded ms-5 " style=" width:530px; height:330px " >
            
                <div class="ms-4">
                    <img src="{{ asset('images/clover.png') }}" alt="" style="width: 90px; height:90px;">
                    <img src="{{ asset('images/clover.png') }}" alt="" style="width: 90px; height:90px;">
                    <img src="{{ asset('images/clover.png') }}" alt="" style="width: 90px; height:90px;">
                    <img src="{{ asset('images/clover.png') }}" alt="" style="width: 90px; height:90px;">
                    <img src="{{ asset('images/clover.png') }}" alt="" style="width: 90px; height:90px;">
                    <img src="{{ asset('images/clover.png') }}" alt="" style="width: 90px; height:90px;">
                </div>
            </div>
        </div>

        <div class="mt-0" id="kelas" style="height: 100vh">
            <div class="d-flex align-items-center justify-content-center">
                <img src="{{ asset('images/daun_polos.png') }}" alt="" style="width: 90px; height: 90px;">
                <span class="text-uppercase fw-bolder" style="font-family: Playfair Display; font-size: 30px;">
                    our class teacher
                </span>
                <img src="{{ asset('images/daun_polos.png') }}" alt="" style="width: 90px; height: 90px; transform: rotate(90deg);">
            </div>
            
            <div class="d-flex mt-3 ms-5  ">
                <img src="{{ asset('images/profil.jpg') }}" alt="" class="ms-5" style="border-radius: 300px 300px 200px 30px; width: 300px; height: 400px;">

                <div class="ms-5 d-flex flex-column justify-content-center align-items-center" style="margin-top: -20px">
                    <span class="fw-bold text-center" style="font-family: Playfair Display; font-size: 30px;">Nama Guru</span>
            
                    <span class="mt-4 d-block w-75">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Eum possimus saepe tenetur consequuntur facilis dolor at iure voluptate excepturi laudantium. 
                        Beatae accusamus magni aspernatur reiciendis ratione at repellendus quas quisquam.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Eum possimus saepe tenetur consequuntur facilis dolor at iure voluptate excepturi laudantium. 
                        Beatae accusamus magni aspernatur reiciendis ratione at repellendus quas quisquam.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Eum possimus saepe tenetur consequuntur facilis dolor at iure voluptate excepturi laudantium. 
                        Beatae accusamus magni aspernatur reiciendis ratione at repellendus quas quisquam.
                        
                    </span>

                    <a href="#" class="align-self-start " style="margin-left: 12%">
                        <button class="btn mt-4 ps-4 pe-4 " style="background-color:#2E6E65; border-radius:15px; color:white; font-family: Playfair Display; font-size: 20px; ">
                            See Profile
                        </button>
                    </a>
                </div>
            </div>

            <div class="mt-5">
                <div class=" position-absolute" style='left: 0;'>
                    <img src="{{ asset('images/wave.png') }}" alt="" style="width: 100vw; height: 70px;">
                </div>
                <div class="pt-5 object-fit-contain" style="background-color: #2E6E65, height:200px; width:100%  ">
                    <div class="mt-5">
                        {{-- <span>
                            OUR CLASSMATE
                        </span> --}}
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection