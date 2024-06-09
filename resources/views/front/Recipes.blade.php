@extends('front.master')

@section('content')
<section>
    <div class="position-relative" style="padding-bottom: 44px; background-color: #e4f0e8;">
        <img class="d-block w-100 image-with-shadow" src="front-assets/images/waffer2.png" alt="First slide">
        <div class="position-absolute" style="top: 50%; transform: translateY(-50%); left: -14px;"></div>
        <div class="carousel-caption" style="max-width: 80%; position: absolute; bottom: 37rem; width: 100%; text-align: end;">
            <h5 style="max-width: 60%;">لمحة عن وفير</h5>
            <h5 style="max-width: 57%; color: #007329;">من نحن</h5>
        </div>
    </div>
</section>

<section style="background-color: #e4f0e8;">
    <div class="container">
        <div class="row align-items-center" style="background-color: #74C329; padding-top: 31px;">
            <!-- Image Column -->
            <div class="col-md-2">
                <img src="front-assets/images/logo.png" class="img-fluid" alt="صورة">
            </div>
            <!-- Text Column -->
            <div class="col-md-7 text-center" style="font-size: 50px; font-weight: 700; font-family: cairo;">
                <p style="color: green;">وصفات شهية</p>
                <p style="color: red;">مع وفير</p>
            </div>
            <!-- Button Column -->
            <div class="col-md-3 text-right">
                <div class="container">
                    <input type="search" id="searchQuery" placeholder="🔍 بحث" style="direction: rtl; border-collapse: separate; border-radius: 5px; border: 4px solid #fff; width: 100%; box-sizing: border-box; font-size: 16px;">
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="container" style="background-color: #e4f0e8;">
    <div class="row justify-content-center" style="padding-top: 47px;">
        <div class="col-md-5 mb-2" style="padding-bottom: 75px;">
            <div class="card card-custom">
                <img src="front-assets/images/waffer3.jpg" class="card-img-top" alt="Image Right">
                <div class="card-body" style="background-color: #F2F2F2;">
                    <h5 class="card-title" style="text-align: right;font-size: 25px;">وجبة 2  </h5>
                    <p class="card-tex" style="text-align: right;">.موسبيإ ميرول صن نم خسن ىلع اًضيأ توح يتلاو ركيام جياب سودلأ لثم ينورتكلإلا رشنلا</p>
                    <button type="button" class="btn btn-danger btn-lg" style="height: 101%; width: 64px; border: none; font-size: 9px;">عرض المزيد</button>
                </div>
            </div>
        </div>
        <div class="col-md-5 mb-2" style="padding-bottom: 75px;">
            <div class="card card-custom">
                <img src="front-assets/images/waffer34.jpg" class="card-img-top" alt="Image Left">
                <div class="card-body" style="background-color: #F2F2F2;">
                    <h5 class="card-title" style="text-align: right;font-size: 25px;">وجبة 3  </h5>
                    <p class="card-tex" style="text-align: right;">.موسبيإ ميرول صن نم خسن ىلع اًضيأ توح يتلاو ركيام جياب سودلأ لثم ينورتكلإلا رشنلا</p>
                    <button type="button" class="btn btn-danger btn-lg" style="height: 101%; width: 64px; border: none; font-size: 9px;">عرض المزيد</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" style="padding-bottom: 68px;">
        <div class="col-md-5" style="padding-bottom: 75px;">
            <div class="card card-custom">
                <img src="front-assets/images/waffer3.jpg" class="card-img-top" alt="Image Right">
                <div class="card-body" style="background-color: #F2F2F2;">
                    <h5 class="card-title" style="text-align: right;font-size: 25px;">وجبة 2  </h5>
                    <p class="card-tex" style="text-align: right;">.موسبيإ ميرول صن نم خسن ىلع اًضيأ توح يتلاو ركيام جياب سودلأ لثم ينورتكلإلا رشنلا</p>
                    <button type="button" class="btn btn-danger btn-lg" style="height: 101%; width: 64px; border: none; font-size: 9px;">عرض المزيد</button>
                </div>
            </div>
        </div>
        <div class="col-md-5" style="padding-bottom: 75px;">
            <div class="card card-custom">
                <img src="front-assets/images/waffer34.jpg" class="card-img-top" alt="Image Left">
                <div class="card-body" style="background-color: #F2F2F2;">
                    <h5 class="card-title" style="text-align: right; font-size: 25px;">وجبة 3  </h5>
                    <p class="card-tex" style="text-align: right;">.موسبيإ ميرول صن نم خسن ىلع اًضيأ توح يتلاو ركيام جياب سودلأ لثم ينورتكلإلا رشنلا</p>
                    <button type="button" class="btn btn-danger btn-lg" style="height: 101%; width: 64px; border: none; font-size: 9px;">عرض المزيد</button>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
