@extends('front.master')

@section('content')
<section>
    <div class="position-relative" style="background-color: #e4f0e8;">
        <img class="d-block w-100 image-with-shadow" src="front-assets/images/waffer2.png" alt="First slide">
        <div class="position-absolute" style="top: 50%;transform: translateY(-50%); left: -14px;">
        
        </div>
        <div class="carousel-caption" style="     max-width: 56%;position: absolute; bottom:37rem;  width: 100%; text-align: end;">
            <h5 style="max-width:77%;  color:red;  ">  <span style="color:#007329;">نشاطات</span>    وفير</h5>
            <h5 style="max-width:77%;  color:#007329; "> ضمن المعارض</h5>
        </div>
    </div>
</section>
<div class="container custom-container" style="display: flex; justify-content: center; background-color: #e4f0e8; padding-top: 28px; border-radius: 10px;">
    <select class="custom-select" style="background-color: #74C329; color: white; border-radius: 23px;    height: 44px;
    font-size: 14px;">
        <option value="2023">اذهب الى 2023</option>
        <option value="2024">اذهب الى 2024</option>
        <option value="2022">اذهب الى 2022</option>
    </select>
</div>

<section class="datee" style="background-color: #e4f0e8; padding-top: 31px; ">
<div class="container">
<div class="row align-items-center">
<div class="col-md-12 datee" >
    <p >-------------------------2023-------------------------</p>
</div>
</div>
</div>

</section>
<section class="container" style="background-color: #e4f0e8;">
    <div class="row justify-content-center" style="padding-top: 47px; padding-bottom: 67px;">
        <div class="col-md-3" style="padding-bottom: 75px;">
            <div class="card" style="background-color: #FFFFFF; text-align: center; height: 292px; width: 90%; margin: auto;">
                <div class="card-body" style="background-color: #FFFFFF;">
                    <img src="front-assets/images/اكسبو.png" class="card-img-top" alt="Image" style="max-width: 100%; height: auto; max-height: 200px;">
                    <h5 class="card-title" style="font-size: 25px; margin-top: 35px;">--------2023--------</h5>
                    <p class="card-textt"style="font-size: 19px;    margin-top: 43px;">معرض الصناعات الغذائية والتعبئة والتغليف</p>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="padding-bottom: 75px;">
            <div class="card" style="background-color: #FFFFFF; text-align: center;height: 292px; width: 90%; margin: auto;">
                <div class="card-body" style="background-color: #FFFFFF;">
                    <img src="front-assets/images/اكسبو.png" class="card-img-top" alt="Image" style="max-width: 100%; height: auto; max-height: 200px;">
                    <h5 class="card-title" style="font-size: 25px; margin-top: 35px;">--------2023--------</h5>
                    <p class="card-textt"style="font-size: 19px;margin-top: 43px;">معرض الصناعات الغذائية والتعبئة والتغليف</p>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="padding-bottom: 75px;">
            <div class="card" style="background-color: #FFFFFF; text-align: center; height: 292px; width: 90%; margin: auto;">
                <div class="card-body" style="background-color: #FFFFFF;">
                    <img src="front-assets/images/اكسبو.png" class="card-img-top" alt="Image" style="max-width: 100%; height: auto; max-height: 200px;">
                    <h5 class="card-title" style="font-size: 25px; margin-top: 35px;">--------2023--------</h5>
                    <p class="card-textt" style="font-size: 19px;margin-top: 43px;">معرض الصناعات الغذائية والتعبئة والتغليف</p>
                </div>
            </div>
        </div>
    </div>
</section>


</section>
@endsection
