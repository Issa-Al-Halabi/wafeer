@extends('front.master')

@section('content')
    <section>
        <div class="position-relative">
            <img class="d-block w-100 image-with-shadow" src="{{ asset('front-assets/images/waffer2.png') }}"
                alt="First slide">
            <div class="position-absolute" style="top: 50%;transform: translateY(-50%); left: -14px;">

            </div>
            <div class="carousel-caption"
                style="     max-width: 80%;position: absolute; bottom:37rem;  width: 100%; text-align: end;">
                <h5 style="max-width:52%;   "> منتجاتنا </h5>
                <h5 style="max-width:57%;color:#007329   ">صحتك...ومذاقك </h5>
            </div>
        </div>
    </section>
    @if ($activeCategory)
        <section class="" style="background-color: #e4f0e8; ">
            <div class="container">
                <div class="row align-items-center" style="    padding-top: 31px;">
                    <!-- عمود الصورة -->
                    <div class="col-md-2">
                        <img src="{{ asset('front-assets/images/logo.png') }}" class="img-fluid" alt="صورة">
                    </div>
                    <!-- عمود النص -->
                    <div class="col-md-8 text-center"
                        style="    font-size: 50px;font-weight: 700;color: red; font-family: cairo;">
                        <p>
                            {{ $activeCategory->name }}
                        </p>
                    </div>
                    <!-- عمود الزر -->
                    <div class="col-md-2 text-right">
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="    direction: rtl; width: 113px;height: 35px;font-size: 16px;">
                                فرز حسب
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach ($categories as $category)
                                    @if ($activeCategory != $category)
                                        <a class="dropdown-item"
                                            href="{{ route('products', $category->id) }}">{{ $category->name }}</a>
                                    @endif
                                @endforeach
                            </div>
                            <script>
                                $(document).ready(function() {
                                    $('.dropdown-toggle').dropdown()
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="ls gallery-section" style="background-color: #e4f0e8; ">
        <div class="container-fluid">
            <div class="row columns_padding_0" style="    padding-bottom: 26px;">
                <div class="col-sm-12" style="    padding-top: 29px;">
                    <div class="owl-carousel" data-margin="15" data-nav="true" data-items="3" data-responsive-xlg="4"
                        data-responsive-lg="4" data-responsive-md="4" data-responsive-sm="2" data-responsive-xs="1">
                        @foreach ($latestProducts as $product)
                            <div class="vertical-item">
                                <div class="item-media gray-background">
                                    {{-- @if ($product->created_at > now()->subdays(10)) --}}
                                    <div class="new">
                                        <span>جديد</span>
                                    </div>
                                    {{-- @endif --}}
                                    <img class="center-block img-responsive" src="{{ asset('storage/' . $product->image) }}"
                                        alt="" style="width: 92px; height: auto;">
                                    <div class="item-description">
                                        <p> {{ $product->name }} </p>
                                        <p> {{ $product->description }} </p>
                                    </div>
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]"
                                                href="{{ asset('front-assets/images/gallery/01.jpg') }} "></a>
                                        </div>
                                        <a class="abs-link"></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- تكرار الهيكل للصور الأخرى -->
                    </div><!-- .owl-carousel -->
                </div>
            </div>

            <div class="row columns_padding_0" style="padding-bottom: 26px;">
                @foreach ($products as $product)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3" style="    padding-top: 29px;">
                        <div class="vertical-item">
                            <div class="item-media gray-background">

                                <img class="center-block img-responsive" src="{{ asset('storage/' . $product->image) }}"
                                    alt="" style="width: 92px; height: auto;">
                                <div class="item-description">
                                    <p> {{ $product->name }} </p>
                                    <p> {{ $product->description }} </p>
                                </div>
                                <div class="media-links">
                                    <div class="links-wrap">
                                        <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]"
                                            href="{{ asset('front-assets/images/gallery/01.jpg') }} "></a>
                                    </div>
                                    <a class="abs-link"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
