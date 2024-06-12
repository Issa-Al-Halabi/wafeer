@extends('front.master')

@section('content')
    <section>
        <div class="position-relative" style="background-color: #e4f0e8;">
            <img class="d-block w-100 image-with-shadow" src="front-assets/images/waffer2.png" alt="First slide">
            <div class="position-absolute" style="top: 50%;transform: translateY(-50%); left: -14px;">

            </div>
            <div class="carousel-caption"
                style="max-width: 56%;position: absolute; bottom:37rem; width: 100%; text-align: end;">
                <h5 style="max-width:77%; color:red;"> <span style="color:#007329;">تواصل</span> معنا</h5>
            </div>
        </div>
    </section>
    <section style="background-color: #e4f0e8;">
        <div class="container" style="background-color: #e4f0e8; padding-top: 63px; padding-bottom: 75px;">
            <form action="{{ route('saveContactUs') }}" method="POST">
                @csrf
                @if (session('success'))
                    <div class="alert alert-success text-right">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row justify-content-center" style="direction: rtl;">
                    <div class="col-md-3 order-md-2">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" rows="8" placeholder=" الرسالة">{{ old('message') }}</textarea>

                            @error('message')
                                <div class="alert-danger text-right">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success float-right" style="width: 90px;">إرسال</button>
                    </div>
                    <div class="col-md-3 order-md-1">
                        <div class="form-group">
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="form-control custom-input" id="fullName" placeholder=" الاسم الكامل"
                                style="height: 33px;">

                            @error('name')
                                <div class="alert-danger text-right">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" value="{{ old('phone') }}"
                                class="form-control custom-input" id="phoneNumber" placeholder=" الرقم"
                                style="height: 33px;">

                            @error('phone')
                                <div class="alert-danger text-right">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="form-control custom-input" id="email" placeholder=" البريد الالكتروني"
                                style="height: 33px;">

                            @error('email')
                                <div class="alert-danger text-right">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" value="{{ old('subject') }}"
                                class="form-control custom-input" id="subject" placeholder=" الموضوع"
                                style="height: 33px;">

                            @error('subject')
                                <div class="alert-danger text-right">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>



    <div class="position-relative" style="    padding-bottom: 100px;">
        <div id="map"></div>
        <div class="icon-bar text-center"style="display: flex; flex-direction: column; align-items: center;">
            <a href="https://www.google.com/maps" target="_blank">
                <i class="fas fa-map-marker-alt"></i>

            </a>
            <h1 style="font-size: 10px; color:green;"> دمشق-عربين</h1>

            <a href="tel:+963954554442">
                <i class="fas fa-phone"></i>
            </a>
            <h1 style="font-size: 10px; color:green;">+963954554442</h1>

            <a href="mailto:Info@Wafeer.sy">
                <i class="fas fa-envelope"></i>
            </a>
            <h1 style="font-size: 10px; color:green;">Info@Wafeer.sy</h1>


            <a href="mailto:Saeedalmodaskhen@gmail.com">
                <i class="fas fa-envelope"></i>

            </a>
            <h1 style="font-size: 10px; color:green;">Saeedalmodaskhen@gmail.com</h1>

            {{-- <a href="Saeedalmodaskhen@gmail.com">
                <i class="fas fa-envelope"></i>
                <h1 style="font-size:10px; color:green;"><a href="mailto:Info@Wafeer.sy">Info@Wafeer.sy </a></h1>
                <h1 style="font-size:10px; color:green;"><a
                        href="mailto:Saeedalmodaskhen@gmail.com">Saeedalmodaskhen@gmail.com</a> </h1> --}}

        </div>
    </div>


    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // التأكد من أن الصفحة تم تحميلها بالكامل
        document.addEventListener('DOMContentLoaded', (event) => {
            // إنشاء الخريطة وتحديد مركزها ونقطة التكبير
            var map = L.map('map').setView([33.5, 36.3], 13);

            // استخدام OpenStreetMap TileLayer
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // إضافة علامة على الخريطة
            var marker = L.marker([33.5, 36.3]).addTo(map);
            marker.bindPopup("<b>مرحبًا!</b><br>هذه علامتي.").openPopup();
        });
    </script>
@endsection
