<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة مثال</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <style>
        /* أضف هنا تنسيقات CSS الخاصة بك */
    </style>
</head>
<body>
    <footer class="footer">
        <!-- أيقونات وسائل التواصل الاجتماعي -->
        <div class="social-icons" style="position: absolute; left: 27px; top: -54px;">
            <a href="رابط فيسبوك" target="_blank" style="display: inline-block; background-color: #74C329; border-radius: 50%; padding: 14px;">
                <i class="fab fa-facebook-f" style="font-size: 24px; color: white;"></i>
            </a>
            <a href="رابط إنستغرام" target="_blank" style="display: inline-block; background-color: #74C329; border-radius: 50%; padding: 14px;">
                <i class="fab fa-instagram" style="font-size: 24px; color: white;"></i>
            </a>
        </div>

        <!-- الصورة في المنتصف -->
        <div class="centered-logo" id="centered-logo" style="z-index: 1; padding-bottom: 19px; padding-left: 135px;">
            <img id="logo" src="front-assets/images/logo.png" alt="Centered Image" class="img-fluid mx-auto">
            <div class="overlay">
                <div>
                    <h2 class="textfooter">شركة وفير للصناعات الغذائية</h2>
                    <h2 class="textfooter">WAFEER FOR FOOD PRODUCTS</h2>
                    <p class="" style="color: white;font-size: 18px;">DEVELOPED BY  <a href="https://peaklink.sy/">PEAK LINK</a> </p>
                </div>
            </div>
        </div>
        <!-- الصور الجانبية والخلفية -->
        <img src="front-assets/images/Vector 1.png" alt="Background Image" class="background-image">
        <img src="front-assets/images/Asset 3 1.png" alt="Footer Image Left" class="side-image left-image">
        <img src="front-assets/images/Asset 2 1.png" alt="Footer Image Right" class="side-image right-image">
    </footer>

    <script>
        // JavaScript للتحقق من المسار الحالي وضبط الأنماط بناءً عليه
        window.addEventListener('DOMContentLoaded', (event) => {
            const logo = document.getElementById('logo');
            const centeredLogo = document.getElementById('centered-logo');
            
            if (window.location.pathname === '/') {
                logo.style.display = 'block';
            } else {
                logo.style.display = 'none';
                centeredLogo.style.paddingTop = '169px';
            }
        });
    </script>
</body>
</html>
