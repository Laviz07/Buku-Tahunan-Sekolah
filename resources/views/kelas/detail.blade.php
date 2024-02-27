@extends('layouts.layout')
@section('title', 'Detail Kelas')
@section('content')
    <div class="mt-4 mb-4">
        <div class="d-flex gap-2 container" style="height: 100vh;">
            <div>
                <span class="text-uppercase d-block "
                    style="font-size: 90px; font-weight: 500; line-height: 90px; font-family: Playfair Display; color: #2E6E65; width:500px">
                    xii rpl a gallery
                </span>

                <span class="text-uppercase mt-1 d-block "
                    style="font-size: 20px;  font-family: Playfair Display; color: #2E6E65;">
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
                <img src="{{ asset('images/test1.jpg') }}" alt="" class="rounded ms-5 "
                    style=" width:530px; height:330px ">

                <div class="ms-4">
                    <img src="{{ asset('images/clover.png') }}" alt="" class="rotate"
                        style="width: 90px; height:90px;">
                    <img src="{{ asset('images/clover.png') }}" alt="" class="rotate"
                        style="width: 90px; height:90px;">
                    <img src="{{ asset('images/clover.png') }}" alt="" class="rotate"
                        style="width: 90px; height:90px;">
                    <img src="{{ asset('images/clover.png') }}" alt="" class="rotate"
                        style="width: 90px; height:90px;">
                    <img src="{{ asset('images/clover.png') }}" alt="" class="rotate"
                        style="width: 90px; height:90px;">
                    <img src="{{ asset('images/clover.png') }}" alt="" class="rotate"
                        style="width: 90px; height:90px;">
                </div>
            </div>
        </div>

        <div class="container" id="walas" style="height: 100vh;">
            <div class="d-flex align-items-center justify-content-center">
                <img src="{{ asset('images/daun_polos.png') }}" alt="" style="width: 90px; height: 90px;">
                <span class="text-uppercase fw-bolder h-expand"
                    style="font-family: Playfair Display; font-size: 30px; cursor:context-menu;">
                    our class teacher
                </span>
                <img src="{{ asset('images/daun_polos.png') }}" alt=""
                    style="width: 90px; height: 90px; transform: rotate(90deg);">
            </div>

            <div class="d-flex mt-3 ms-5  ">
                <img src="{{ asset('images/ravi.jpg') }}" alt="" class="ms-5 image"
                    style="border-radius: 300px 300px 200px 30px; width: 300px; height: 400px;">

                <div class="ms-5 d-flex flex-column justify-content-center align-items-center" style="margin-top: -20px">
                    <span class="fw-bold text-center text-capitalize "
                        style="font-family: Playfair Display; font-size: 30px;">
                        Muhamad ade ravi Bin Prab-UwU
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

        <div class="container-fluid p-0">
            <div class="mt-5 d-block " id="siswa">
                <div class="w-100 d-flex" style='left: 0;'>
                    <img src="{{ asset('images/wave.png') }}" class="flex-fill" alt="" style="height: 70px;">
                </div>

                <div class="w-100 d-flex" style="left:0; color: white; ">
                    <div class="pt-3 pb-5" style=" background-color: #2E6E65; width:100vw; left:0; height: auto;">

                        <div class="d-flex justify-content-center align-items-center ">
                            <img src="{{ asset('images/daun_polos_putih.png') }}" alt=""
                                style="width: 90px; height: 90px;">
                            <span class="text-center fw-bold h-expand "
                                style="font-family: Playfair Display; font-size: 30px; cursor:context-menu;">
                                OUR CLASSMATE
                            </span>
                            <img src="{{ asset('images/daun_polos_putih.png') }}" alt=""
                                style="width: 90px; height: 90px; transform: rotate(90deg);">
                        </div>

                        <div class="container">
                            <div class="d-flex">
                                <div class="row col">
                                    <span class="text-uppercase" style="font-family: Roboto Slab, serif; font-size: 25px;">
                                        XII RPL A
                                    </span>
                                    <span class="text-uppercase"
                                        style="font-family: Roboto Slab, serif; font-size: 18px;">
                                        xii rekayasa perangkat lunak a
                                    </span>
                                </div>
                                <div class="row text-end">
                                    <span class="text-uppercase"
                                        style="font-family: Roboto Slab, serif; font-size: 25px;">
                                        ANGKATAN 25
                                    </span>
                                    <span style="font-family: Roboto Slab, serif; font-size: 18px;">
                                        2023-2024
                                    </span>
                                </div>
                            </div>

                            <div class="row mt-5 mb-4">
                                @for ($i = 0; $i < 16; $i++)
                                    <div
                                        class="col-lg-2 col-md-3 col-sm-4  mb-4 mt-4 mb-lg-0 justify-content-center d-flex ">
                                        <div class="image-container-p text-center position-relative">
                                            <a href="{{ route('siswaKelas') }}">
                                                <img class="image object-fit-cover" src="{{ asset('images/ecul.jpg') }}"
                                                    alt="" style="width: 170px; height: 270px;">
                                                <div class="image-text">
                                                    <span
                                                        class="text-uppercase text-white d-block mt-2 text-center w-100 position-absolute 
                                                        start-50 translate-middle-x"
                                                        style="bottom: 20px; font-size:14px;">
                                                        Muhammad Ezra
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endfor
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5" style="height: auto">
            <div class="d-flex align-items-center justify-content-center">
                <img src="{{ asset('images/daun_polos.png') }}" alt="" style="width: 90px; height: 90px;">
                <span class="text-uppercase fw-bolder h-expand"
                    style="font-family: Playfair Display; font-size: 30px; cursor:context-menu;">
                    our memories
                </span>
                <img src="{{ asset('images/daun_polos.png') }}" alt=""
                    style="width: 90px; height: 90px; transform: rotate(90deg);">
            </div>

            <div id="memori" class="row mt-3 mb-4">
                @for ($i = 0; $i < 10; $i++)
                    <div class="col-lg-4 col-md-3 col-xs-6 mb-4 mt-4 mb-lg-0">
                        <div class="image-container-l">
                            <img class="image object-fit-cover" src="{{ asset('images/test1.jpg') }}" alt=""
                                style="width: 100%; height: 200px; border-radius: 5px">
                        </div>
                        <span class="text-uppercase d-block mt-2 text-center "
                            style="font-family: `Roboto Slab`, serif; font-size: 18px; font-weight: 700;">
                            Kenangan Kelas XII RPL A
                        </span>
                    </div>
                @endfor
            </div>
        </div>
    </div>

@endsection
