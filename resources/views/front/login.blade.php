<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('front-assets/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('front-assets/fonts/material-design-iconic-font.css')}}">

    <title>Document</title>
   
</head>
<body>
    <!-- Sign in  Form -->
    <section class="sign-in" style="direction: rtl;">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="front-assets/images/logo.png"  alt="صورة التسجيل" style="transform: scale(1.4);"></figure>
                    <a href="/signup" class="signup-image-link" style="font-family: cairo light;">إنشاء حساب</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title" style="color:#163c53; font-family: cairo light;">تسجيل الدخول</h2>
                    <form method="POST" class="register-form" id="login-form">
                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="your_name" id="your_name" placeholder="اسمك" style="font-family: cairo light;">
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="your_pass" id="your_pass" placeholder="كلمة المرور" style="font-family: cairo light;">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                            <label for="remember-me" class="label-agree-term" style="font-family: cairo light;"><span style="margin-left: 7px;"><span></span></span>تذكرني</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="تسجيل الدخول" style="font-family: cairo light;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
