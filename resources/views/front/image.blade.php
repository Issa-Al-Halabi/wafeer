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
                <h5 style="max-width:77%;  color:#007329  "> نشاطات وفير </h5>
                <h5 style="    font-size: 24px;max-width: 73%;  "> ضمن المعارض </h5>
            </div>
        </div>
    </section>
    <section style="background-color: #e4f0e8; padding-top: 31px; ">
        <div class="container">
            <div class="row align-items-center">
                <!-- عمود الصورة -->
                <div class="col-md-2">
                    <img src="{{ asset('front-assets/images/logo.png') }}" class="img-fluid" alt="صورة" style="width: 100%;">
                </div>
                <!-- عمود النص -->
                <div class="col-md-7 text-center"
                    style="    font-size: 28px; font-weight: 700; font-family: 'Cairo', sans-serif;">
                    <p style="    margin-top: 54px;color: green;">
                        {{ $exhibition->name }}
                    </p>

                </div>
                <!-- عمود الزر -->
                <div class="col-md-3 text-right">
                    <img src="{{ asset('storage/' . $exhibition->image) }}" class="img-fluid" alt="صورة">
                </div>
            </div>
        </div>
    </section>
    <section class="datee" style="background-color: #e4f0e8; padding-top: 31px; ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 datee" style="color:#007329;">
                    <p style="    ">-------------------------{{ $exhibition->year }}-------------------------</p>
                </div>
            </div>
        </div>

    </section>
    <div class="container ">
        <div class="row justify-content-center" style="background-color: #e4f0e8;padding-bottom: 149px;">
            @foreach ($exhibition->images as $image)
                <div class="col-md-5 mb-2 d-flex justify-content-center align-items-center p-0">
                    <img src="{{ asset('storage/' . $image) }}" class="img-fluid" alt="Image 1">
                </div>
            @endforeach
        </div>
    </div>
@endsection
