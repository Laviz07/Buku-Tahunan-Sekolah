@extends('layouts.layout')
@section('title', 'Siswa')
@section('content')
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div>
                    <img src="{{ asset('images/ecul.jpg') }}" alt="" class="image object-fit-cover"
                        style="border-radius: 30px 100px 80px 30px; width: 260px; height: 360px;">
                </div>

                <div class="mt-4">
                    <a href="#" class="text-decoration-none">
                        <i class="bi bi-instagram fs-3 sosmed-icon"></i>
                    </a>

                    <a href="#" class="text-decoration-none ms-4">
                        <i class="bi bi-facebook fs-3 sosmed-icon"></i>
                    </a>

                    <a href="#" class="text-decoration-none ms-4">
                        <i class="bi bi-twitter-x fs-3 sosmed-icon"></i>
                    </a>

                    <a href="#" class="text-decoration-none ms-4">
                        <i class="bi bi-tiktok fs-3 sosmed-icon"></i>
                    </a>
                </div>

            </div>

            <div class="col-lg-8 col-md-12" style="vertical-align: middle;">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('images/clover.png') }}" alt="" class="rotate-detail"
                        style="width: 45px; height:45px;">
                    <div class="text-center w-75 name-detail">
                        <span class="fw-bold text-center text-capitalize "
                            style="font-family: Playfair Display; font-size: 24px;">
                            Muhamad ezra nicholas pandapotan panjaitan
                        </span>
                    </div>
                    <img src="{{ asset('images/clover.png') }}" alt="" class="rotate-detail"
                        style="width: 45px; height:45px;">
                </div>

                <script>
                    const nameDetail = document.querySelector('.name-detail');
                    const rotateDetails = document.querySelectorAll('.rotate-detail');

                    nameDetail.addEventListener('mouseover', () => {
                        rotateDetails.forEach((rotateDetail) => {
                            rotateDetail.style.transform = 'rotate(90deg)';
                        });
                    });

                    nameDetail.addEventListener('mouseout', () => {
                        rotateDetails.forEach((rotateDetail) => {
                            rotateDetail.style.transform = 'rotate(0deg)';
                        });
                    });
                </script>

                <div class="d-flex justify-content-center mt-4">
                    <div class="row w-75 justify-content-center align-items-center">

                        <div class="row " style="position: relative;">
                            <div class="bg-detail" style="position: relative; z-index: 2;">
                                <div class="d-flex">
                                    <span class="w-50" style="font-size:16px; font-weight: 700;">Nama Panggilan</span>
                                    <span class="pe-3 text-capitalize " style="font-size: 16px; font-weight: 500;">:
                                        Ecul</span>
                                </div>

                                <div class="d-flex mt-2">
                                    <span class="w-50" style="font-size:16px; font-weight: 700;">Kelas</span>
                                    <span class="pe-3 text-capitalize " style="font-size: 16px; font-weight: 500;">: XII RPL
                                        A</span>
                                </div>

                                <div class="d-flex mt-2">
                                    <span class="w-50" style="font-size:16px; font-weight: 700;">Tanggal lahir</span>
                                    <span class="pe-3" style="font-size: 16px; font-weight: 500;">: 30 Februari
                                        2005</span>
                                </div>

                                <div class="d-flex mt-2">
                                    <span class="w-50" style="font-size:16px; font-weight: 700;">Hobi</span>
                                    <span class="pe-3" style="font-size: 16px; font-weight: 500;">: Main ML</span>
                                </div>

                                <div class="row mt-2">
                                    <span class="" style="font-size:16px; font-weight: 700;">Alamat :</span>
                                    <span class="mt-1" style="font-size: 16px; font-weight: 500;">Jalan Lorem ipsum dolor
                                        sit
                                        amet, consectetur adipiscing elit. Phasellus eu mauris consectetur sem tempus
                                        elementum.</span>
                                </div>

                                <div class="row mt-2">
                                    <span class="" style="font-size:16px; font-weight: 700;">Quotes :</span>
                                    <span class="mt-1 fst-italic" style="font-size: 16px; font-weight: 500;">"Apapun
                                        keadaannya,
                                        yang penting joget. Oke gas, oke gas..."</span>
                                </div>
                            </div>
                            <img src="{{ asset('images/daun_banyak.svg') }}" alt=""
                                style="width: 340px;  z-index: -10; position: absolute; right:360px; top: -50px;" />

                            <img src="{{ asset('images/daun_banyak.svg') }}" alt=""
                                style="width: 340px; position: absolute; z-index: -1; left:370px; top: 50px; transform: scaleX(-1);">
                        </div>

                        <div class="mt-4">
                            <a href="#gallery" class=" " style="">
                                <button class="btn-green ps-4 pe-4 " style="">
                                    See Gallery
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="mt-5" id="gallery" style="height: auto">
            <div class="d-flex align-items-center justify-content-center mt-5">
                <img src="{{ asset('images/daun_polos.png') }}" alt="" style="width: 90px; height: 90px;">
                <span class="text-uppercase fw-bolder h-expand"
                    style="font-family: Playfair Display; font-size: 30px; cursor:context-menu;">
                    gallery
                </span>
                <img src="{{ asset('images/daun_polos.png') }}" alt=""
                    style="width: 90px; height: 90px; transform: rotate(90deg);">
            </div>

            <div id="memori" class="row mt-3 mb-4">
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-lg-4 col-md-3 col-xs-6 mb-4 mt-4 mb-lg-0">
                        <div class="image-container-l">
                            <img class="image object-fit-cover" src="{{ asset('images/test1.jpg') }}" alt=""
                                style="width: 100%; height: 200px; border-radius: 5px">
                        </div>
                        {{-- <span class="text-uppercase d-block mt-2 text-center "
                            style="font-family: `Roboto Slab`, serif; font-size: 18px; font-weight: 700;">
                            Kenangan Kelas XII RPL A
                        </span> --}}
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
