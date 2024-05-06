@extends('front.master')

@section('content')


<section class="ls section_padding_120 team_member">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 text-center bottommargin_30">
                <div class="vertical-item title-absolute">
                    <div class="item-media team_member_photo">
                        <img src="front-assets/images/team/02.png" alt="">
                    </div>
                </div>
                <div class="item-content with_padding text-center">
                   
                    <h2 class="topmargin_-5 bottommargin_25">
                        Qing <strong>He</strong>
                    </h2>
                  
                </div> 
            </div>

            <div class="col-lg-offset-1 col-lg-6 col-md-7 col-sm-12">
                  <h1 style="direction: rtl;">معلومات الخادمة</h1>
               
               
                
              


                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Biography</a></li>
                   
                    
                    <li><a href="#tab4" role="tab" data-toggle="tab">video </a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content top-color-border bottommargin_30">
                    
                    <div class="tab-pane fade in active" id="tab1">
                        <p class="fontsize_20 bottommargin_10 grey"style="direction: rtl;"><strong>السيرة الذاتية:</strong></p>
                        <p class="line_heght_2">
                        <ul style="direction: rtl;" >
                          <li>الأسم: Qing HE</li>
                          <li>العمر: 25</li>
                         <li>الجنس: انثى</li>
                          <li>العنوان: سوريا</li>
                          <li>الهاتف: 010100000</li>
                             </ul>
                        </p>
                        <p class="fontsize_20 bottommargin_10 grey" style="direction: rtl;"><strong>Professional Life:</strong></p>
                        <p class="line_heght_2 bottommargin_-10"style="direction: rtl;">
                            Salami spare ribs nisi labore, tail boudin sed id sausage fatback sunt urkey. Ut pork belly voluptate leberkas sirloin biltong strip steak pariatur alcatra beef ribs venison veniam labore.
                        </p>           
                    </div>  
                       <!-- Other tab content -->
    <div class="tab-pane fade" id="tab4">
        <div class="" style="display: flex; justify-content: center; align-items: center; padding-bottom: 13px;">
            <iframe width="500" height="315" src="front-assets/images/team/num.mp4" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
                </div><!-- eof .tab-content -->
                
               
            
            </div>
        </div>
    </div>
</section>


<section class="ds solutions columns_padding_0 teasers-table">
	<div class="container">
		<div class="row">
			<div class="col-md-4 center_bg users-teaser">
				<div class="teaser media">
                    <div class="media-left">
                        <div class="teaser_icon sprite-icons sprite-users-yellow">
                        </div>
                    </div>
                    <div class="media-body">
                        <p class="margin_0 small-text grey"><strong>Highly-trained staff</strong></p>
                        <p class="margin_0">Sed ut perspiciatis, unde omnis is natus error sit voluptatem </p>
                    </div>
                </div>
			</div>
			<div class="col-md-4 center_bg like-teaser">
				<div class="teaser media with_border">
                    <div class="media-left">
                        <div class="teaser_icon sprite-icons sprite-like-green">
                        </div>
                    </div>
                    <div class="media-body">
                        <p class="margin_0 small-text grey"><strong>Quality cleaning tools</strong></p>
                        <p class="margin_0">Doloremque laudantium, totam aperiam eaque ipsa, quae abillo</p>
                    </div>
                </div>
			</div>
			<div class="col-md-4 center_bg timer-teaser">
				<div class="teaser media">
                    <div class="media-left">
                        <div class="teaser_icon sprite-icons sprite-timer-blue">
                        </div>
                    </div>
                    <div class="media-body">
                        <p class="margin_0 small-text grey"><strong>Fast &amp; Effective service</strong></p>
                        <p class="margin_0">Voluptatem accusantium doloremque laudantium totam </p>
                    </div>
                </div>
			</div>
		</div>
	</div>
</section>
@endsection