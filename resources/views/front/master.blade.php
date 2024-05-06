<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from html.modernwebtemplates.com/ecoclean/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Apr 2024 09:24:21 GMT -->
@include('front.partials.head')
<body>
<div class="preloader">
    <div class="preloader_image"></div>
</div>
    <!--[if lt IE 9]>
        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
    <![endif]-->

<!-- search modal -->
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <div class="widget widget_search">
        <form method="get" class="searchform form-inline" action="https://html.modernwebtemplates.com/">
            <div class="form-group">
                <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
            </div>
            <button type="submit" class="theme_button">Search</button>
            
        </form>
        
    </div>
</div>

<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
<div id="box_wrapper">

<!-- template sections -->

@include('front.partials.header')

@yield('content')


@include('front.partials.fotter')

</div><!-- eof #box_wrapper -->
</div><!-- eof #canvas -->
@include('front.partials.scripts')

    </body>

<!-- Mirrored from html.modernwebtemplates.com/ecoclean/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Apr 2024 09:24:42 GMT -->
</html>