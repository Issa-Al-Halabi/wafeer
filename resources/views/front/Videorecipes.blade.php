@extends('front.master')

@section('content')
    <section>
        <div class="position-relative" style="     background-color: #e4f0e8;  
    ">
            <img class="d-block w-100 image-with-shadow" src="{{ asset('front-assets/images/waffer2.png') }}"
                alt="First slide">
            <div class="position-absolute" style="top: 50%;transform: translateY(-50%); left: -14px;">

            </div>
            <div class="carousel-caption"
                style="     max-width: 56%;position: absolute; bottom:37rem;  width: 100%; text-align: end;">
                <h5 style="max-width:77%;  color:#007329  "> وصفات </h5>
                <h5 style="    font-size: 29px;max-width: 73%;  "> وفير </h5>
            </div>
        </div>
    </section>

    <section style="background-color: #e4f0e8; padding-top: 31px; ">
        <div class="container">
            <div class="row align-items-center">
                <!-- عمود الصورة -->
                <div class="col-md-2">
                    <img src="{{ asset('front-assets/images/logo.png') }}" class="img-fluid" alt="صورة">
                </div>
                <!-- عمود النص -->
                <div class="col-md-7 text-center"
                    style="font-size: 50px; font-weight: 700; font-family: 'Cairo', sans-serif;">
                    <p style="color: green;">وصفات شهية</p>
                    <p style="color: red;">مع وفير</p>
                </div>
                <!-- عمود الزر -->
                <div class="col-md-3 text-right">
                    {{-- <input
                        style="direction: rtl; border-radius: 5px; border: 4px solid #fff; width: 100%; box-sizing: border-box; font-size: 16px;"
                        type="search" id="searchQuery" placeholder="🔍 بحث"> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="container" style="background-color: #e4f0e8;">

        <div class="col-md-12 ">

            <video class="card-img-top" controls style="height: 47%;">
                <source src="{{ asset('storage/' . $recipe->video) }}" type="video/mp4">

            </video>
            <div class="card-body" style="background: #F2F2F2;">
                <h5 class="card-title" style="text-align: right;font-size: 50px; color:red;">{{ $recipe->name }}</h5>
                <p class="card-tex" style="text-align: right;font-size: 30px; color:#007329">{{ $recipe->description }}</p>

            </div>

        </div>



    </section>
    <h5 class="card-title"
        style="font-size: 50px; color: #75C425; display: flex; justify-content: center;    padding-top: 23px;">طريقة التحضير
    </h5>
    <div class="container " style=" ">
        <div class="row justify-content-center" style="padding-bottom: 67px; padding-top: 47px;">
            <div class="col-md-8 order-md-1" style="background-color: #75C425;     height: 327px;">

                <div class="card bg-white">
                    <div class="card-body" style="background-color: #75C425;">

                        <div class="border-green p-2" style="font-size: 25px;">
                            <p style="color: white;direction: ltr;text-align: right;">{{ $recipe->preparation }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
