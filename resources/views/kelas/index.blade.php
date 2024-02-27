@extends('layouts.layout')
@section('title', 'Daftar Kelas')
@section('content')
    <div class="container mt-4 mb-4">
        <div class="d-flex " style="100vh">
            <div>
                <span class="text-uppercase d-block "
                    style="font-size: 100px; font-weight: 500; line-height: 100px; font-family: Playfair Display; color: #2E6E65; width:500px">
                    List of classes
                </span>

                <span class="text-uppercase mt-4 d-block "
                    style="font-size: 40px;  font-family: Playfair Display; color: #2E6E65;">
                    smkn 1 kota bekasi
                </span>

                <a href="#daftar-kelas">
                    <button class="btn mt-5 ps-4 pe-4"
                        style="background-color:#2E6E65; border-radius:15px; color:white; font-family: Playfair Display; font-size: 20px; ">
                        Let's look at the class
                    </button>
                </a>
            </div>

            <div>
                {{-- ini ceritanya caraousel tapi blm jadi --}}
                <div class=" rounded ms-5  " style="background-color:#D9D9D9; width:600px; height:300px ">
                </div>

                <div class="ms-3">
                    <img src="{{ asset('images/clover.png') }}" alt="" class="rotate"
                        style="width: 100px; height:100px;">
                    <img src="{{ asset('images/clover.png') }}" alt="" class="rotate"
                        style="width: 100px; height:100px;">
                    <img src="{{ asset('images/clover.png') }}" alt="" class="rotate"
                        style="width: 100px; height:100px;">
                    <img src="{{ asset('images/clover.png') }}" alt="" class="rotate"
                        style="width: 100px; height:100px;">
                    {{-- <img src="{{ asset('images/clover.png') }}" alt="" style="width: 100px; height:100px;"> --}}
                </div>
            </div>
        </div>

        <div id="daftar-kelas" class="row mt-5 mb-4">
            @for ($i = 0; $i < 8; $i++)
                <div class="col-lg-4 col-md-12 mb-4 mt-4 mb-lg-0">
                    <div class="image-container-l">
                        <a href="{{ route('detailKelas') }}">
                            <img class="image" src="{{ asset('images/test1.jpg') }}" alt=""
                                style="width: 100%; height: 200px; border-radius: 5px">
                        </a>
                    </div>
                    <span class="text-uppercase d-block mt-2 text-center "
                        style="font-family: `Roboto Slab`, serif; font-size: 18px; font-weight: 700;">
                        Kelas XII RPL A
                    </span>
                </div>
            @endfor
        </div>

    </div>
@endsection
