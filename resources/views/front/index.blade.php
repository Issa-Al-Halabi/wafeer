@extends('front.master')

@section('content')



<body>

    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper"style="background-color: #e4f0e8;">
        <section>
    <div class="position-relative">
        <img class="d-block w-100 image-with-shadow" src="front-assets/images/slider.jpg" alt="First slide">
        <div class="position-absolute" style="top: 50%;transform: translateY(-50%); left: -14px;">
            <img src="front-assets/images/Group 11.png" alt="Left Image" class="left-image" style="">
        </div>
        <div class="carousel-caption" style="     max-width: 91%;position: absolute; bottom:37rem;  width: 100%; text-align: end;">
            <h5 style="max-width: 73%;   ">مجموعة متنوعة من المنتجات</h5>
            <h5 style="max-width: 73%;   ">...التي تلبي الاحتياجات الغذائية</h5>
        </div>
    </div>
</section>

<section class="container-fluid mt-5" style="background-color: #e4f0e8;">
    <div class="container" style="padding-bottom: 35px;padding-top: 35px; font-family: cairo;">
        <div class="row"style="background-color: #F2F2F2;">
            <div class="col-md-12 text-center" style="    padding-top: 15px;">
                <h2 style="font-size: 35px; color:red;"> <strong>لمحة عن وفير</strong> </h2>
            </div>
        </div>
        <div class="row"style="background-color: #F2F2F2;">
            <div class="col-md-12 text-right" style="margin-top: -40px;">
                <img class="photo" src="front-assets/images/logo.png" alt="صورة" >
            </div>
        </div>
        <div class="row"style="background-color: #F2F2F2;">
            <div class="col-md-12 text-center" >
                <p class="text1">تأسست شركة وفير للمواد الغذائية في خمسينات القرن الماضي</p>
                <p class="text1">على يد الحاج سعيد المبخر وتميزت منذ ذلك الحين</p>
                <p class="text1">في إنتاج قمر الدين والمربيات ثم خطت في العام 1976</p>
            </div>
            <div class="col-md-12 text-right" style="margin-top: 8px; margin-bottom: 8px;">
    <button type="button" class="btn btn-danger btn-lg" style="height: 84%; width: 127px; border: none; font-size: 21px;">المزيد</button>
</div>

        </div>
    </div>
</section>
<section class="container py-3"style="background-color: #e4f0e8;">
    <div class="containerr">
        <div class="row">
            <div class="col-md-6" style="direction: rtl;">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-7"style="background-color: #F2F2F2;">
                            <div class="card-body" style="text-align: right;">
                                <h1 style="color:red;"><strong>  المكسرات</strong> </h1>
                                <p class="card-text" style=" ">مكسرات متنوعة تلبي جميع احتياجاتك الغذائية</p>
                              
                                <button type="button" class="btn btn-danger btn-lg" style="height: 84%; width: 127px; border: none; font-size: 21px;">المزيد</button>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="front-assets/images/wafeer.png" class="card-img" style=" padding-top: 100px;background-color: #F2F2F2;" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" >
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img src="front-assets/images/Group 2112.png" class="card-img" style=" padding-top:81px;background-color: #F2F2F2;" alt="...">
                        </div>
                        <div class="col-md-7" style="background-color: #F2F2F2;">
                            <div class="card-body" style="text-align: right;">
                            <h1 style="color:red;"><strong>الكونسروا</strong> </h1>
                            <p class="card-text" style=" ">منتجات متنوعة تلبي جميع احتياجاتك الغذائية</p>
                            <button type="button" class="btn btn-danger btn-lg" style="height: 84%; width: 127px; border: none; font-size: 21px;">المزيد</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <div class="text-centerr" >منتجاتنا</div>
            <img src="front-assets/images/wafeerinedx.jpg" alt="Right Image" class="img-fluid">
            <button type="button" class="btn btn-danger mt-2 yazan " >استعراض المزيد</button>
        </div>
    </div>
</section>


    <section class="ls gallery-section" style="background-color: #e4f0e8;">
    <div class="container-fluid">
        <div class="row columns_padding_0" style="    padding-bottom: 147px;">
            <div class="col-sm-12" style="    padding-top: 29px;">
                <div class="owl-carousel" data-margin="15" data-nav="true" data-items="5"
                    data-responsive-xlg="5" data-responsive-lg="5" data-responsive-md="4"
                    data-responsive-sm="3" data-responsive-xs="1">

                    <div class="vertical-item">
                        <div class="item-media gray-background">
                            <img class="center-block img-responsive" src="front-assets/images/mshmoh.png" alt="" style="width: 92px; height: auto;">
                            <div class="item-description">
                                <p> مربى المشمش  </p>
                                <p>  قطع 350غ</p>
                            </div>
                            <div class="media-links">
                                <div class="links-wrap">
                                    <a class="p-view prettyPhoto" title=""
                                        data-gal="prettyPhoto[gal]"
                                        href="front-assets/images/gallery/01.jpg"></a>
                                </div>
                                <a class="abs-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media gray-background">
                            <img class="center-block img-responsive" src="front-assets/images/homas.png" alt="" style="width: 92px; height: auto;">
                            <div class="item-description">
                                <p>حمص حب  </p>
                                <p>  مسلوق 350غ</p>
                            </div>
                            <div class="media-links">
                                <div class="links-wrap">
                                    <a class="p-view prettyPhoto" title=""
                                        data-gal="prettyPhoto[gal]"
                                        href="front-assets/images/gallery/01.jpg"></a>
                                </div>
                                <a class="abs-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-item">
                        
                        <div class="item-media gray-background">
                        <div class="new">
                        <span>جديد</span>
                            </div>
                            <img class="center-block img-responsive" src="front-assets/images/foal.png" alt="" style="width: 92px; height: auto;">
                            <div class="item-description">
                                <p>  فول مدمس  </p>
                                <p>    سادة 350غ</p>
                            </div>
                            <div class="media-links">
                                <div class="links-wrap">
                                    <a class="p-view prettyPhoto" title=""
                                        data-gal="prettyPhoto[gal]"
                                        href="front-assets/images/gallery/01.jpg"></a>
                                </div>
                                <a class="abs-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media gray-background">
                            <img class="center-block img-responsive" src="front-assets/images/zra.png" alt="" style="width: 92px; height: auto;">
                            <div class="item-description">
                                <p>  ذرة حب  </p>
                                <p>    حلوة 350غ</p>
                            </div>
                            <div class="media-links">
                                <div class="links-wrap">
                                    <a class="p-view prettyPhoto" title=""
                                        data-gal="prettyPhoto[gal]"
                                        href="front-assets/images/gallery/01.jpg"></a>
                                </div>
                                <a class="abs-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media gray-background">
                            <img class="center-block img-responsive" src="front-assets/images/homasd.png" alt="" style="width: 92px; height: auto;">
                            <div class="item-description">
                                <p>  حمص  </p>
                                <p>   بالطحينة 350غ</p>
                            </div>
                            <div class="media-links">
                                <div class="links-wrap">
                                    <a class="p-view prettyPhoto" title=""
                                        data-gal="prettyPhoto[gal]"
                                        href="front-assets/images/gallery/01.jpg"></a>
                                </div>
                                <a class="abs-link"></a>
                            </div>
                        </div>
                    </div>
                    <!-- تكرار الهيكل للصور الأخرى -->
                </div><!-- .owl-carousel -->
            </div>
        </div>
    </div>
</section>
        </div>
    </div>
</body>

@endsection
