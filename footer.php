<div id="c-contact">
    <div class="c-contact_inner">
        <p class="des">Webサイト・ホームページの制作、業務委託等のご相談は<br class="is-sp">下記からお問い合わせください</p>
        <div class="c-btn">
            <p><a href="/contact/">お問い合わせ</a></p>
        </div>
        <div class="icons">
            <div class="icon-block"><span class="c_icon"><img src="../image/icon-mail.png" alt=""><a href="mailto:tomizawa@t-creative-works.com">tomizawa@t-creative-works.com</a></span></div>
            <div class="icon-block"><span class="c_icon"><img src="../image/icon-tell.png" alt=""><a href="tel:+81-50-3199-1487">050-3199-1487</a></span></div>
            <!--                    <div class="icon-block"><span class="c_icon"><img src="image/icon-twitter.png" alt=""><a href="https://twitter.com/tcw_job" target="_blank">Twitter</a></span></div>-->
        </div>
    </div>
</div>
   <footer class="footer">
       <a href="#i-all" class="r_a" v-smooth-scroll="{ duration: 1200, offset: 0 }">
           <div class="return return_fixed">
               <div class="return_in"></div>
           </div>
       </a>
    <div class="footer_inner">
        <ul>
            <li><a href="/">Top</a></li>
            <li><a href="/works/">Works</a></li>
            <li><a href="/service/">Service</a></li>
            <li class="prepare">media</li>
            <li><a href="/contact/">Contact</a></li>
        </ul>
        <p class="copy_right">Copyright (C) t-creative-works All rights reserved.</p>
    </div>
</footer>
<!--
<div class="aa">aaa</div>
<p class="bb">bbbbb</p>
header>div.log>a^button.hamburger-button+nav.hamburger-nav>ul>li.n-item-$*3>a{メニュー01}
-->
</div>
</body>

<script>
    const VueSmoothScroll = window['VueSmoothScroll'].default;

    Vue.use(VueSmoothScroll);
    new Vue({
        el: '.all'
        //            alert("Aaaaaa");
    });
</script>

<script>
    $(document).ready(function() {
        $('.drawer').drawer();
    });
</script>

<script>

//    $(function () {
//        if (window.matchMedia( "(min-width: 768px)" ).matches) {
//            var $body = $('.drawer-hamburger-icon'),
//                $navTypeA = $('#p-about'),
//                navTypeAOffsetTop = $navTypeA.offset().top;
//        };
//    });
    
//        $(function(){
//        $('a[href^="#"]').click(function(){
//            let speed = 500;
//            let href= $(this).attr("href");
//            let target = $(href == "#" || href == "" ? 'html' : href);
//            let position = target.offset().top;
//            $("html, body").animate({scrollTop:position}, speed, "swing");
//            return false;
//        });
//    });
</script>
