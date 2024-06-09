<style>
 

   .hidden {
       top: -100px; /* أو أي قيمة تعتقد أنها كافية لإخفاء النافبار */
   }
</style>

<nav id="navbar" class="mainmenu_wrapper bordered_items" style="">

    <ul class="mainmenu nav sf-menu" style="width:max-content ">
    
    <li class="active">
    <a style="font-size: 18px;font-weight: 700;" href="/" onclick="changeColor(this)">الرئيسية</a>
</li>
<li>
    <a style="font-size: 18px;font-weight: 700;" href="whoarewe" onclick="changeColor(this)">من نحن</a>
</li>
<li>
    <a style="font-size: 18px;font-weight: 700;" href="products" onclick="changeColor(this)">منتجاتنا</a>
</li>

        <li>
            <a style="font-size: 18px;font-weight: 700;" href="Recipes">وصفاتنا </a>
        </li>
        <li>
            <a style="font-size: 18px;font-weight: 700;" href="about.html"> التصدير</a>
        </li>
        <li>
            <a style="font-size: 18px;font-weight: 700;" href="about.html"> المعارض</a>
        </li>
        <li>
            <a style="font-size: 18px;font-weight: 700;" href="about.html"> تواصل معنا</a>
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

