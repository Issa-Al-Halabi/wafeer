<style>
    .hidden {
        top: -100px;
        /* أو أي قيمة تعتقد أنها كافية لإخفاء النافبار */
    }
</style>

<nav id="navbar" class="mainmenu_wrapper bordered_items" style="">

    <ul class="mainmenu nav sf-menu" style="width:max-content ">

        <li class="active">
            <a style="font-size: 18px;font-weight: 700;" href="{{ route('index') }}"
                onclick="changeColor(this)">الرئيسية</a>
        </li>
        <li>
            <a style="font-size: 18px;font-weight: 700;" href="{{ route('whoarewe') }}" onclick="changeColor(this)">من
                نحن</a>
        </li>
        <li>
            <a style="font-size: 18px;font-weight: 700;" href="{{ route('products') }}"
                onclick="changeColor(this)">منتجاتنا</a>
        </li>

        <li>
            <a style="font-size: 18px;font-weight: 700;" href="{{ route('recipes') }}">وصفاتنا </a>
        </li>
        <li>
            <a style="font-size: 18px;font-weight: 700;" href="{{ route('index') }}"> التصدير</a>
        </li>
        <li>
            <a style="font-size: 18px;font-weight: 700;" href="{{ route('exhibitions') }}"> المعارض</a>
        </li>
        <li>
            <a style="font-size: 18px;font-weight: 700;" href="{{ route('contactUs') }}"> تواصل معنا</a>
        </li>


    </ul>
</nav>
<script>
    let lastScrollTop = 0;
    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            // المستخدم يمرر للأسفل
            navbar.classList.add('hidden');
        } else if (scrollTop === 0) {
            // المستخدم في أعلى الصفحة
            navbar.classList.remove('hidden');
        }
        lastScrollTop = scrollTop;
    });

    function changeColor(element) {
        const links = document.querySelectorAll('.mainmenu a');
        links.forEach(link => {
            link.style.color = ''; // إزالة أي لون محدد
        });
        element.style.color = 'red'; // تعيين لون الأحمر للرابط المنقر عليه
    }
</script>
<!-- eof main nav -->
