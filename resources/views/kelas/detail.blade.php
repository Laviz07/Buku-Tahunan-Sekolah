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

                <a href="#walas">
                    <button class=" btn-green mt-5 ps-4 pe-4">
                        Let's see our class
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

        <div class="" id="walas" style="height: 100vh;">
            <div class="d-flex align-items-center justify-content-center">
                <img src="{{ asset('images/daun_polos.png') }}" alt="" style="width: 90px; height: 90px;">
                <span class="text-uppercase fw-bolder" style="font-family: Playfair Display; font-size: 30px;">
                    our class teacher
                </span>
                <img src="{{ asset('images/daun_polos.png') }}" alt="" style="width: 90px; height: 90px; transform: rotate(90deg);">
            </div>
            
            <div class="d-flex mt-3 ms-5  ">
                <img src="{{ asset('images/ravi.jpg') }}" alt="" class="ms-5 image" style="border-radius: 300px 300px 200px 30px; width: 300px; height: 400px;">

                <div class="ms-5 d-flex flex-column justify-content-center align-items-center" style="margin-top: -20px">
                    <span class="fw-bold text-center" style="font-family: Playfair Display; font-size: 30px;">
                        Muhamad Ravi Bin Prab-UwU
                    </span>
            
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

                    <div class="d-flex mt-4 align-self-start" style="margin-left: 12%">
                        <a href="#" class=" " style="">
                            <button class="btn-green ps-4 pe-4 " style="">
                                See Profile
                            </button>
                        </a>

                        <a href="#siswa" class="" style="">
                            <button class="btn-black ms-3 ps-4 pe-4 " style="">
                                See Our Classmate
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 d-block " id="siswa" style="height: 210vh;">
            <div class=" position-absolute" style='left: 0;'>
                <img src="{{ asset('images/wave.png') }}" alt="" style="width: 100vw; height: 70px;">
            </div>

            <div class="pt-5 position-absolute " style="left:0; color: white; ">
                <div class="mt-3 pt-3 pb-5" style=" background-color: #2E6E65; width:100vw; left:0; height: 100%;">

                    <div class="d-flex justify-content-center align-items-center ">
                        <img src="{{ asset('images/daun_polos_putih.png') }}" alt="" style="width: 90px; height: 90px;">
                        <span class="text-center fw-bold  " style="font-family: Playfair Display; font-size: 30px;  " >
                            OUR CLASSMATE
                        </span>
                        <img src="{{ asset('images/daun_polos_putih.png') }}" alt="" style="width: 90px; height: 90px; transform: rotate(90deg);">
                    </div>

                    <div class=" container">
                        <div class="d-flex">
                            <div class="col">
                                <span class="text-uppercase" style="font-family: Roboto Slab, serif; font-size: 25px;">
                                    XII RPL A
                                </span>
                            </div>
                            <div class="row text-end">
                                <span class="text-uppercase" style="font-family: Roboto Slab, serif; font-size: 25px;">
                                    ANGKATAN 25
                                </span>
                                <span style="font-family: Roboto Slab, serif; font-size: 20px;">
                                    2023-2024
                                </span>
                            </div>
                        </div>
                        
                        <div  class="row mt-5 mb-4 align-content-center d-flex ">
                            @for ($i = 0; $i < 8; $i++)
                            <div class="col-lg-3 col-md-12 mb-4 mt-4 mb-lg-0 ">
                                <div class="image-container-p text-center w-75 ">
                                    <a href="{{url('siswa', ['detail'])}}">
                                        <img class="image" src="{{ asset('images/profil.jpg' ) }}" alt="Abdul somad" 
                                        style="width: 200px; height: 300px; border-radius: 5px">
                                    </a>
                                    
                                </div>
                                <span class="text-uppercase d-block mt-2 text-center w-75 " style="font-family: `Roboto Slab`, serif; font-size: 18px; font-weight: 400;">
                                    Abdul somad
                                </span>
                            </div>
                            @endfor
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
        <div class="d-block " style="height: auto">
            <div class="d-flex align-items-center justify-content-center">
                <img src="{{ asset('images/daun_polos.png') }}" alt="" style="width: 90px; height: 90px;">
                <span class="text-uppercase fw-bolder" style="font-family: Playfair Display; font-size: 30px;">
                    our memories
                </span>
                <img src="{{ asset('images/daun_polos.png') }}" alt="" style="width: 90px; height: 90px; transform: rotate(90deg);">
            </div>

            <div id="memori" class="row mt-3 mb-4">
                @for ($i = 0; $i < 6; $i++)
                <div class="col-lg-4 col-md-12 mb-4 mt-4 mb-lg-0">
                    <div class="image-container-l">
                        <img class="image" src="{{ asset('images/test1.jpg' ) }}" alt="" 
                        style="width: 100%; height: 200px; border-radius: 5px">
                    </div>   
                    <span class="text-uppercase d-block mt-2 text-center " style="font-family: `Roboto Slab`, serif; font-size: 18px; font-weight: 700;">
                        Kenangan Kelas XII RPL A
                    </span>
                </div>
                @endfor
            </div>
        </div>
        
    </div>
@endsection