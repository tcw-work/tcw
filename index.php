<!DOCTYPE html>
<html lang="jp">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>TCW</title>
<meta name="robots" content="noindex">
    <meta name="description"
        content="TCWは、webサイト、ホームページの制作を随時承っております。個人で事業を営むクライアント様、一部制作をご依頼したい制作会社様からの業務等もご対応致します。フリーランスとして柔軟なご対応が可能ですので、お気軽にご連絡ください。">
    <meta name="keyword" content="tcw,web制作,ホームページ作成,webデザイン,webコーディング,保守運用,フロントエンドエンジニア,フリーランス">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--        particles.js-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js?date=202108028">
    </script>
    <!-- CSS定義 -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/fundations/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:400,500,700&display=swap" rel="stylesheet">
    <!--        ↓ドロワーメニュー-->
    <!-- JS定義 -->
    <script src="js/jquery-3.5.0.min.js"></script>
    <!--        <script src="node_link.js"></script>-->
    <!--        <script src="update.js"></script>-->
    <!-- drawer.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
    <!-- jquery &amp; iScroll -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
    <!-- drawer.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>

    <!--       vuw.js-->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue2-smooth-scroll@1.5.0/dist/vue-smooth-scroll.min.js"></script>

    <!--    ogp-->
    <meta property="og:image" content="https://t-creative-works.com/image/tcw_ogp.jpg">
    <meta property="og:type" content="website">
    <meta property="og:title" content="TCW">
    <meta property="og:url" content="https://t-creative-works.com/">
    <meta property="og:site_name" content="TCW">
    <meta property="og:description"
        content="TCWは、webサイト、ホームページの制作を随時承っております。個人で事業を営むクライアント様、一部制作をご依頼したい制作会社様からの業務等もご対応致します。フリーランスとして柔軟なご対応が可能ですので、お気軽にご連絡ください。">
    <meta property="og:locale" content="ja_JP">
    <meta property="”fb:app_id”" content="”App-ID(15文字の半角数字)”">

    <!--    favicon-->
    <link rel="shortcut icon" href="image/favicon.gif" type="image/gif">
    <link rel="icon" href="image/favicon.gif" type="image/gif">
    <!--    スマホ用アイコン画像-->
    <link rel="apple-touch-icon-precomposed" href="image/touch-icon.png">
    <!--    電話番号やメールアドレスの変換設定防止タグ-->
    <meta name="format-detection" content="email=no,telephone=no,address=no">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6B8SHB1V7D"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-6B8SHB1V7D');
    </script>

    <link rel="manifest" href="manifest.json">
    <script src="https://www.gstatic.com/firebasejs/5.5.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.2/firebase-messaging.js"></script>
    <script type="text/javascript" src="push.js" defer></script>
</head>


<body class="drawer drawer--top">
    <div class="all" id="i-all">
        <header role="banner" class="top-only">
            <div class="l-h-top">
                <h1 class="l-log">
                    <a href="/">
                        <!--                       <img src="image/log.png" alt="TCW">-->
                        TCW
                    </a>
                </h1>
                <button type="button" class="drawer-toggle drawer-hamburger">
                    <span class="sr-only">toggle navigation</span>
                    <span class="drawer-hamburger-icon"></span>
                </button>
            </div>

            <nav class="drawer-nav" role="navigation">
                <div class="log">
                    <a href="/">
                        <!--                        <img src="image/log.png" alt="TCW">-->
                        TCW
                    </a>
                </div>
                <div class="drawer-in">
                    <ul class="drawer-menu">
                        <li class="drawer-ttl"><a class="drawer-brand" href="/service/">Service</a></li>
                        <li><a class="drawer-menu-item" href="/service/#p-s_b_01"><span>ご依頼内容について</span></a></li>
                        <li><a class="drawer-menu-item" href="/service/#p-s_b_02"><span>料金について</span></a></li>
                        <li><a class="drawer-menu-item" href="/service/#p-s_b_03"><span>制作物について</span></a></li>
                    </ul>
                    <ul class="drawer-menu">
                        <li><a class="drawer-brand" href="/works/">Works</a></li>
                        <li><a class="drawer-menu-item" href="/works/detail01.php"><span>Magnific-Japan</span></a></li>
                        <!-- <li><a class="drawer-menu-item" href="/works/detail02.php"><span>テンツーケア</span></a></li> -->
                        <li><a class="drawer-menu-item" href="/works/detail04.php"><span>TCW</span></a>
                        </li>
                        <li><a class="drawer-menu-item" href="/works/detail03.php"><span>Source Pack</span></a></li>
                        <li><a class="drawer-menu-item" href="/works/#p-port_works-others"><span>その他テストサイト</span></a>
                        </li>
                    </ul>
                    <ul class="drawer-menu">
                        <li><a class="drawer-brand" href="/contact/">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="p-p_top">
            <div class="f-wrap">
                <div class="f-wrap-inner">

                    <!--        アニメーションエフェクト実験-->
                    <!-- particles.js container -->
                    <div id="particles-js">
                        <div class="p-top_mv">
                            <h2 class="p-top_ttl">Web制作の技術と価値</h2>
                            <p class="p-top_s_ttl01">無限大の可能性を秘めたサイト制作と</p>
                            <p class="p-top_s_ttl02">新しい技術を追い求めるエンジニアリング</p>
                            <!--
                            <div class="p-anchor">
                                <ul>
                                    <li><a href="#p-about" v-smooth-scroll="{ duration: 1200, offset: 0 }">About</a></li>
                                    <li><a href="#p-t_c_works" v-smooth-scroll="{ duration: 1200, offset: 0 }">Works</a></li>
                                    <li><a href="#p-t_c_service" v-smooth-scroll="{ duration: 1200, offset: 0 }">Service</a></li>
                                    <li><a href="#c-contact" v-smooth-scroll="{ duration: 1200, offset: 0 }">Contact</a></li>
                                </ul>
                            </div>
-->
                            <div class="m-scroll">
                                <div class="m-s-in">
                                    <a href="#p-about" v-smooth-scroll="{ duration: 1200, offset: 0 }" class="m-arrow">
                                        <p>Scroll</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- stats - count particles -->
                    <!--        アニメーションエフェクト実験-->

                    <div id="p-about">
                        <div class="p-about_inner">
                            <h2 class="c-head_2">ABOUT</h2>
                            <p>当サイトをご覧いただき、誠にありがとうございます。</p>
                            <p>TCWでは、お客様に寄り添ったWebサイト・ホームページの制作を行っております。企業様や個人事業主様からのご依頼はもちろん、制作会社様からの業務委託なども随時承っております。
                            </p>
                            <p>「サイトをリニューアルしたい」、「コーディングのみお願いしたい」、「運用をお任せしたい」…このようなご要望に対しても柔軟に対応することが可能です。</p>
                            <p>また、本サイトにはサービス概要ページや、制作物を載せた実績ページ等もご用意させていただいておりますので、是非そちらもご覧ください</p>
                        </div>
                    </div>

                    <div id="p-subject">
                        <ul class="word-deco">
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <div class="p-subject_inner">
                            <h2 class="c-head_2">Content</h2>

                            <div class="p-s_add" id="p-t_c_works">
                                <div class="p-s_group">
                                    <div class="p-s_img is-pc">
                                        <a href="/works/">
                                            <p><img src="image/subject_01.jpg" alt="Works"></p>
                                            <div class="shadow-box"><span>Check</span></div>
                                        </a>
                                    </div>
                                    <div class="p-s_des">
                                        <h3><span class="p-s_ttl">Works<span
                                                    class="p-s_ttl_small">メディア、コーポレートサイト等の制作実績を多数掲載</span></span></h3>
                                        <div class="p-s_img is-sp">
                                            <a href="/works/">
                                                <p><img src="image/subject_01.jpg" alt="Works"></p>
                                                <div class="shadow-box"><span>Check</span></div>
                                            </a>
                                        </div>
                                        <div class="p-s_explain">
                                            <div class="p-s_explain_inner">
                                                <p>ポートフォリオ（実績）に関しましては、こちらよりご観覧が可能となっております。</p>
                                                <p>企業様からご依頼を頂いたコーポレートサイト、自主制作サイト等の多種多様な実績を掲載しておりますので、是非ご覧ください。</p>
                                                <div class="c-btn">
                                                    <p><a href="/works/">詳しくはコチラ</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="p-s_add" id="p-t_c_service">
                                <div class="p-s_group p-s_group_02">
                                    <div class="p-s_des">
                                        <h3><span class="p-s_ttl">Service<span
                                                    class="p-s_ttl_small">柔軟なサービスをご提供</span></span></h3>
                                        <div class="p-s_img is-sp">
                                            <a href="/service/">
                                                <p><img src="image/subject_02.jpg" alt="Service"></p>
                                                <div class="shadow-box"><span>Check</span></div>
                                            </a>
                                        </div>
                                        <div class="p-s_explain">
                                            <div class="p-s_explain_inner">
                                                <p>サービスページでは、Webサイト・ホームページ制作の概要や料金、対応可能な業務範囲等を掲載しております。</p>
                                                <p>また、制作会社様からの請負につきましても、こちらをご確認の上でご検討いただけますと幸いです。</p>
                                                <div class="c-btn">
                                                    <p><a href="/service/">詳しくはコチラ</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-s_img is-pc">
                                        <a href="/service/">
                                            <p><img src="image/subject_02.jpg" alt="Service"></p>
                                            <div class="shadow-box"><span>Check</span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="p-s_add">
                                <div class="p-s_group">
                                    <div class="p-s_img is-pc">
                                        <a href="https://t-creative-works.com/" target="_blank">
                                            <p><img src="image/subject_03.jpg" alt="Media"></p>
                                            <div class="shadow-box"><span>Check</span></div>
                                        </a>
                                    </div>
                                    <div class="p-s_des">
                                        <h3><span class="p-s_ttl">Media<span
                                                    class="p-s_ttl_small">技術メディア・ブログを運営</span></span></h3>
                                        <div class="p-s_img is-sp">
                                            <a href="/works/detail05.php">
                                                <p><img src="image/subject_03.jpg" alt="Media"></p>
                                                <div class="shadow-box"><span>Check</span></div>
                                            </a>
                                        </div>
                                        <div class="p-s_explain">
                                            <div class="p-s_explain_inner">
                                                <p>フロントエンド、バックエンドに関する技術や知識を掲載したサイトの運営をしております。</p>
                                                <p>技術レベルの参考にしていただけますと、より制作イメージを掴めるかと存じます。</p>
                                                <div class="c-btn">
                                                    <p><a href="https://t-creative-works.com/"
                                                            target="_blank">詳しくはコチラ</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </main>

        <div id="c-contact">
            <div class="c-contact_inner">
                <p class="des">Webサイト・ホームページの制作、業務委託等のご相談は<br class="is-sp">下記からお問い合わせください</p>
                <div class="c-btn">
                    <p><a href="/contact/">お問い合わせ</a></p>
                </div>
                <div class="icons">
                    <div class="icon-block"><span class="c_icon"><img src="image/icon-mail.png" alt=""><a
                                href="mailto:tomizawa@t-creative-works.com">tomizawa@t-creative-works.com</a></span>
                    </div>
                    <!-- <div class="icon-block"><span class="c_icon"><img src="image/icon-tell.png" alt=""><a
                                href="tel:+81-50-3199-1487">050-3199-1487</a></span></div> -->
                    <!--                    <div class="icon-block"><span class="c_icon"><img src="image/icon-twitter.png" alt=""><a href="https://twitter.com/tcw_job" target="_blank">Twitter</a></span></div>-->
                </div>
            </div>
        </div>
        <footer class="footer">
            <a href="#i-all" class="r_a" v-smooth-scroll="{ duration: 1200, offset: 0 }">
                <div class="return">
                    <div class="return_in"></div>
                </div>
            </a>
            <div class="footer_inner">
                <ul>
                    <li><a href="#i-all" v-smooth-scroll="{ duration: 1200, offset: 0 }">Top</a></li>
                    <li><a href="/works/">Works</a></li>
                    <li><a href="/service/">Service</a></li>
                    <li class="prepare">media</li>
                    <li><a href="/contact/">Contact</a></li>
                </ul>
                <p class="copy_right" id="c_r">Copyright (C) t-creative-works All rights reserved.</p>
            </div>
        </footer>
    </div>

    <script>
    // ServiceWorker登録：https://developers.google.com/web/fundamentals/primers/service-workers/?hl=ja
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('sw.js').then(function(registration) {
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }).catch(function(err) {
            console.log('ServiceWorker registration failed: ', err);
        });
    }
    </script>
</body>


<script>
const VueSmoothScroll = window['VueSmoothScroll'].default;

Vue.use(VueSmoothScroll);
new Vue({
    el: '.all',
    data: {
        message: 'v-smooth-scroll_trsting_message'
    }
});
</script>


<script>
$(document).ready(function() {
    $('.drawer').drawer();
});
</script>

<script>
$(function() {
    //            if (window.matchMedia( "(min-width: 768px)" ).matches) {
    var $body = $('.drawer-hamburger-icon'),
        $navTypeA = $('#p-about'),
        $returnicon = $('.return'),
        $returntrigger = $('.p-top_mv'),
        navTypeAOffsetTop = $navTypeA.offset().top,
        returnOffsetTop = $returntrigger.offset().top;


    $(window).on('scroll', function() {
        if ($(this).scrollTop() > navTypeAOffsetTop) {
            $body.addClass('is-fixed');
        } else {
            $body.removeClass('is-fixed');
        }
        if ($(this).scrollTop() > returnOffsetTop) {
            $returnicon.addClass('return_fixed');
        } else {
            $returnicon.removeClass('return_fixed');
        }
    });
    //            };
});
</script>


<!--
    <script>
        $(function(){
            $('a[href^="#"]').click(function(){
                let speed = 500;
                let href= $(this).attr("href");
                let target = $(href == "#" || href == "" ? 'html' : href);
                let position = target.offset().top;
                $("html, body").animate({scrollTop:position}, speed, "swing");
                return false;
            });
        });
    </script>
-->

<script>
particlesJS("particles-js", {
    "particles": {
        "number": {
            "value": 80,
            "density": {
                "enable": true,
                "value_area": 800
            }
        },
        "color": {
            "value": "#ffffff"
        },
        "shape": {
            "type": "circle",
            "stroke": {
                "width": 0,
                "color": "#000000"
            },
            "polygon": {
                "nb_sides": 3
            },
            "image": {
                "src": "img/github.svg",
                "width": 100,
                "height": 100
            }
        },
        "opacity": {
            "value": 0.5291259800856225,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
            }
        },
        "size": {
            "value": 3.945738208161363,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 41,
                "size_min": 0.1,
                "sync": false
            }
        },
        "line_linked": {
            "enable": true,
            "distance": 280,
            "color": "#029779",
            "opacity": 0.24852886943415603,
            "width": 6.2533070373755395
        },
        "move": {
            "enable": true,
            "speed": 1,
            "direction": "none",
            "random": true,
            "straight": false,
            "out_mode": "bounce",
            "bounce": false,
            "attract": {
                "enable": false,
                "rotateX": 10000,
                "rotateY": 10000
            }
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": {
                "enable": false,
                "mode": "repulse"
            },
            "onclick": {
                "enable": false,
                "mode": "push"
            },
            "resize": true
        },
        "modes": {
            "grab": {
                "distance": 400,
                "line_linked": {
                    "opacity": 1
                }
            },
            "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
            },
            "repulse": {
                "distance": 200,
                "duration": 0.4
            },
            "push": {
                "particles_nb": 4
            },
            "remove": {
                "particles_nb": 2
            }
        }
    },
    "retina_detect": true
});
var count_particles, stats, update;
stats = new Stats;
stats.setMode(0);
stats.domElement.style.position = 'absolute';
stats.domElement.style.left = '0px';
stats.domElement.style.top = '0px';
document.body.appendChild(stats.domElement);
count_particles = document.querySelector('.js-count-particles');
update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
        count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
};
requestAnimationFrame(update);;
</script>


</html>