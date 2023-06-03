
// ServiceWorker処理：https://developers.google.com/web/fundamentals/primers/service-workers/?hl=ja

// キャッシュ名とキャッシュファイルの指定
var CACHE_NAME = 'pwa-sample-caches-v2';
var urlsToCache = [
//    "/",
    "index.php",
    "header.php",
    "footer.php",
    "works/detail01.php",
    "works/detail02.php",
    "works/detail03.php",
    "works/detail04.php",
    "works/detail-banner.php",
    "works/index.php",
    "service/index.php",
    "works/test-site/01/css/magnific-popup.css",
    "works/test-site/01/css/reset.css",
    "works/test-site/01/css/style.css",
    "works/test-site/01/css/swiper.css",
    "works/test-site/01/images/btn-next.png",
    "works/test-site/01/images/btn-prev.png",
    "works/test-site/01/images/btn-prev.svg",
    "works/test-site/01/images/btn-view.png",
    "works/test-site/01/images/btn.png",
    "works/test-site/01/images/btn_read.png",
    "works/test-site/01/images/footer-log.png",
    "works/test-site/01/images/form.png",
    "works/test-site/01/images/header-log.png",
    "works/test-site/01/images/hero.jpg",
    "works/test-site/01/images/hero02.jpg",
    "works/test-site/01/images/hero03.jpg",
    "works/test-site/01/images/hero04.jpg",
    "works/test-site/01/images/hero05.jpg",
    "works/test-site/01/images/icon-content01.png",
    "works/test-site/01/images/icon-content02.png",
    "works/test-site/01/images/icon-content03.png",
    "works/test-site/01/images/icon-footer01.png",
    "works/test-site/01/images/icon-footer02.png",
    "works/test-site/01/images/icon-footer03.png",
    "works/test-site/01/images/icon-header01.png",
    "works/test-site/01/images/icon-header02.png",
    "works/test-site/01/images/icon-header03.png",
    "works/test-site/01/images/icon-header03_02.png",
    "works/test-site/01/images/icon-header04.png",
    "works/test-site/01/images/icon-header04_02.png",
    "works/test-site/01/images/icon-header05.png",
    "works/test-site/01/images/icon-header05_02.png",
    "works/test-site/01/images/icon-header06.png",
    "works/test-site/01/images/icon-header06_02.png",
    "works/test-site/01/images/icon-header07.png",
    "works/test-site/01/images/icon-header07_02.png",
    "works/test-site/01/images/icon-header08.png",
    "works/test-site/01/images/icon-header08_02.png",
    "works/test-site/01/images/icon-search.png",
    "works/test-site/01/images/mega-focus.jpg",
    "works/test-site/01/images/pic_footer01.jpg",
    "works/test-site/01/images/pic_footer02.jpg",
    "works/test-site/01/images/pic_footer03.jpg",
    "works/test-site/01/images/pic_footer04.jpg",
    "works/test-site/01/images/pic_mega01.png",
    "works/test-site/01/images/pic_mega02.png",
    "works/test-site/01/images/pic_mega03.png",
    "works/test-site/01/images/pic_mega04.png",
    "works/test-site/01/images/pic_mega05.png",
    "works/test-site/01/images/pic_mega06.png",
    "works/test-site/01/images/pic_work_bottom01.jpg",
    "works/test-site/01/images/pic_work_bottom02.jpg",
    "works/test-site/01/images/pic_work_bottom03.jpg",
    "works/test-site/01/images/pic_work_bottom04.jpg",
    "works/test-site/01/images/retern-btn.png",
    "works/test-site/01/images/work01.jpg",
    "works/test-site/01/images/work02.jpg",
    "works/test-site/01/index.html",
    "works/test-site/01/js/jquery-1.11.1.min.js",
    "works/test-site/01/js/jquery.magnific-popup.min.js",
    "works/test-site/01/js/swiper.js",
    "works/test-site/02/css/reset.css",
    "works/test-site/02/css/style.css",
    "works/test-site/02/images/bg_fork01.png",
    "works/test-site/02/images/bg_fork02.png",
    "works/test-site/02/images/btn_social01.png",
    "works/test-site/02/images/btn_social02.png",
    "works/test-site/02/images/btn_social03.png",
    "works/test-site/02/images/button.png",
    "works/test-site/02/images/closebtn.png",
    "works/test-site/02/images/dl-button.png",
    "works/test-site/02/images/icon_action01.jpg",
    "works/test-site/02/images/icon_action02.jpg",
    "works/test-site/02/images/icon_action03.jpg",
    "works/test-site/02/images/icon_explain01.png",
    "works/test-site/02/images/icon_explain02.png",
    "works/test-site/02/images/icon_explain03.png",
    "works/test-site/02/images/icon_explain04.png",
    "works/test-site/02/images/icon_header01.png",
    "works/test-site/02/images/icon_header02.png",
    "works/test-site/02/images/icon_header03.png",
    "works/test-site/02/images/icon_social-top.png",
    "works/test-site/02/images/logo_footer.png",
    "works/test-site/02/images/log_fork01.png",
    "works/test-site/02/images/log_fork02.png",
    "works/test-site/02/images/log_fork03.png",
    "works/test-site/02/images/log_fork04.png",
    "works/test-site/02/images/log_fork05.png",
    "works/test-site/02/images/log_fork06.png",
    "works/test-site/02/images/main.jpg",
    "works/test-site/02/images/menue-btn.png",
    "works/test-site/02/images/pc/bg_fork01.png",
    "works/test-site/02/images/pc/bg_fork02.png",
    "works/test-site/02/images/pc/main.jpg",
    "works/test-site/02/images/pc/pic-code.png",
    "works/test-site/02/images/pic-code.png",
    "works/test-site/02/images/_icon-header.png",
    "works/test-site/02/index.html",
    "works/test-site/02/js/jquery-1.11.1.min.js",
    "works/test-site/03/css/reset.css",
    "works/test-site/03/css/style.css",
    "works/test-site/03/images/blog01.png",
    "works/test-site/03/images/blog02.png",
    "works/test-site/03/images/blog03.png",
    "works/test-site/03/images/Btn-blog.png",
    "works/test-site/03/images/Btn-blog_hover.png",
    "works/test-site/03/images/Btn-feature01.png",
    "works/test-site/03/images/Btn-feature01_hover.png",
    "works/test-site/03/images/Btn-feature02.png",
    "works/test-site/03/images/Btn-feature02_hover.png",
    "works/test-site/03/images/Btn-works.png",
    "works/test-site/03/images/Btn-works_hover.png",
    "works/test-site/03/images/customer-opinion01.png",
    "works/test-site/03/images/customer-opinion02.png",
    "works/test-site/03/images/customer-opinion03.png",
    "works/test-site/03/images/customer01.png",
    "works/test-site/03/images/customer02.png",
    "works/test-site/03/images/customer03.png",
    "works/test-site/03/images/feature-pic.jpg.png",
    "works/test-site/03/images/log.png",
    "works/test-site/03/images/main-pic.jpg",
    "works/test-site/03/images/service01.gif",
    "works/test-site/03/images/service02.gif",
    "works/test-site/03/images/service03.gif",
    "works/test-site/03/images/service04.gif",
    "works/test-site/03/images/works-pic01.jpg",
    "works/test-site/03/images/works-pic02.jpg",
    "works/test-site/03/images/works-pic03.jpg",
    "works/test-site/03/images/works-pic04.jpg",
    "works/test-site/03/images/works-pic05.jpg",
    "works/test-site/03/images/works-pic06.jpg",
    "works/test-site/03/index.html",
    "works/test-site/03/js/jquery-1.11.1.min.js",
    "works/test-site/04/css/.sass-cache/a525be5471ed084aa7c904a706b13c1fcf002eae/style.scssc",
    "works/test-site/04/css/.sass-cache/fc3bbd3dd6d857a381740f5842098e10c2105e04/style.scssc",
    "works/test-site/04/css/css",
    "works/test-site/04/css/reset.css",
    "works/test-site/04/css/style.css",
    "works/test-site/04/css/style.scss",
    "works/test-site/04/css/swiper.css",
    "works/test-site/04/img/content01-2.jpg",
    "works/test-site/04/img/content01.jpg",
    "works/test-site/04/img/content02-2.jpg",
    "works/test-site/04/img/content02.jpg",
    "works/test-site/04/img/content03-2.jpg",
    "works/test-site/04/img/content03.jpg",
    "works/test-site/04/img/content03_02.jpg",
    "works/test-site/04/img/description_01.png",
    "works/test-site/04/img/description_02.png",
    "works/test-site/04/img/description_03.png",
    "works/test-site/04/img/foote-logo.png",
    "works/test-site/04/img/head-log.png",
    "works/test-site/04/img/hero.jpg",
    "works/test-site/04/img/icon-social01.gif",
    "works/test-site/04/img/icon-social02.gif",
    "works/test-site/04/img/icon-social03.gif",
    "works/test-site/04/img/icon01.png",
    "works/test-site/04/img/icon02.png",
    "works/test-site/04/img/icon03.png",
    "works/test-site/04/img/images/centense_01_01.jpg",
    "works/test-site/04/img/images/centense_01_02.jpg",
    "works/test-site/04/img/images/centense_01_04.jpg",
    "works/test-site/04/img/images/content03_01.jpg",
    "works/test-site/04/img/images/content03_02.png",
    "works/test-site/04/img/images/content03_03.jpg",
    "works/test-site/04/img/images/content03_04.jpg",
    "works/test-site/04/img/images/content03_06.jpg",
    "works/test-site/04/img/images/description_02_01.jpg",
    "works/test-site/04/img/images/description_02_03.jpg",
    "works/test-site/04/img/images/description_02_04.jpg",
    "works/test-site/04/img/main.jpg",
    "works/test-site/04/img/search-log.png",
    "works/test-site/04/img/shop-btn.png",
    "works/test-site/04/img/shop01_1.jpg",
    "works/test-site/04/img/shop01_2.jpg",
    "works/test-site/04/img/shop01_3.jpg",
    "works/test-site/04/img/shop02_1.jpg",
    "works/test-site/04/img/shop02_2.jpg",
    "works/test-site/04/img/shop03_1.jpg",
    "works/test-site/04/img/shop03_2.jpg",
    "works/test-site/04/img/shop03_3.jpg",
    "works/test-site/04/img/twitter.gif",
    "works/test-site/04/index.html",
    "works/test-site/04/js/jquery-1.11.1.min.js",
    "works/test-site/04/js/swiper.js",
    "contact/contact-confirm.php",
    "contact/contact-last.php",
//    "contact/index.php",
    "css/fundations/f-base.css",
    "css/fundations/f-base.scss",
    "css/fundations/f-config.css",
    "css/fundations/f-config.scss",
    "css/fundations/reset.css",
    "css/layout/hamburger-menu.css",
    "css/layout/l-breadcrumb.css",
    "css/layout/l-breadcrumb.scss",
    "css/layout/l-footer.css",
    "css/layout/l-footer.scss",
    "css/layout/l-header.css",
    "css/layout/l-header.scss",
    "css/layout/l-main.css",
    "css/layout/l-main.scss",
    "css/object/component/c-button.css",
    "css/object/component/c-button.scss",
    "css/object/component/c-contact.css",
    "css/object/component/c-contact.scss",
    "css/object/component/c-cont_icon.css",
    "css/object/component/c-cont_icon.scss",
    "css/object/component/c-heading.css",
    "css/object/component/c-heading.scss",
    "css/object/component/c-others.css",
    "css/object/component/c-others.scss",
    "css/object/component/c-sideword.css",
    "css/object/component/c-sideword.scss",
    "css/object/component/c_vertical_article.css",
    "css/object/component/c_vertical_article.scss",
    "css/object/project/p-card.css",
    "css/object/project/p-card.scss",
    "css/object/project/p-contact-page.css",
    "css/object/project/p-contact-page.scss",
    "css/object/project/p-mv.css",
    "css/object/project/p-mv.scss",
    "css/object/project/p-portfolio.css",
    "css/object/project/p-portfolio.scss",
    "css/object/project/p-price.css",
    "css/object/project/p-price.scss",
    "css/object/project/p-service.css",
    "css/object/project/p-service.scss",
    "css/object/project/p-top.css",
    "css/object/project/p-top.scss",
    "css/object/project/p-works.css",
    "css/object/project/p-works.scss",
    "css/object/utility/u-color.css",
    "css/object/utility/u-color.scss",
    "css/object/utility/u-margin.css",
    "css/style.css",
    "css/style.scss",
    "js/hamburger-menu.js",
    "js/jquery-3.5.0.min.js",
    "js/script.js",
    "image/about-bg.png",
    "image/arrow.gif",
    "image/arrow02.gif",
    "image/banner01.png",
    "image/banner02.png",
    "image/detail-image01.jpg",
    "image/detail-image01.jpg.png",
    "image/detail-mv01.jpg",
    "image/detail-mv02.jpg",
    "image/detail-mv03.jpg",
    "image/detail-mv04.jpg",
    "image/detail-point01.jpg",
    "image/detail-point02-02.jpg",
    "image/detail-point02-03.jpg",
    "image/detail-point02-04.jpg",
    "image/detail-point02.jpg",
    "image/detail-point03-01.jpg",
    "image/detail-point03-02.jpg",
    "image/detail-point03-03.jpg",
    "image/detail-point03.jpg",
    "image/detail-point04-01.jpg",
    "image/detail-point04-02.jpg",
    "image/detail-point04-03.jpg",
    "image/detail-point04.jpg",
    "image/favicon.gif",
    "image/icon-mail.png",
    "image/icon-tell.png",
    "image/icon-twitter.png",
    "image/intro.png",
    "image/log.png",
    "image/log_under.png",
    "image/other-work-banner.jpg",
    "image/other-work00.jpg",
    "image/other-work01.jpg",
    "image/other-work02.jpg",
    "image/other-work03.jpg",
    "image/other-work04.jpg",
    "image/person.png",
    "image/return.png",
    "image/r_detail_01.jpg",
    "image/r_detail_02.jpg",
    "image/r_detail_03.jpg",
    "image/service-mv01.jpg",
    "image/side-word01.png",
    "image/side-word02.png",
    "image/side-word03.png",
    "image/subject_01.jpg",
    "image/subject_02.jpg",
    "image/subject_03.jpg",
    "image/t-cont01.jpg",
    "image/t-cont02.jpg",
    "image/t-cont03.jpg",
    "image/t-cont04.jpg",
    "image/tentu_ogp.jpg",
    "image/topic01.jpg",
    "image/touch-icon.png",
    "image/icon-192x192.png",
    "image/icon-256x256.png",
    "image/icon-384x384.png",
    "image/icon-512x512.png"
];
//document.write("<script type='text/javascript' src='list.js'></script>");

// インストール処理
self.addEventListener('install', function(event) {
	event.waitUntil(
		caches
			.open(CACHE_NAME)
			.then(function(cache) {
				return cache.addAll(urlsToCache);
			})
	);
});

// リソースフェッチ時のキャッシュロード処理
self.addEventListener('fetch', function(event) {
	event.respondWith(
		caches
			.match(event.request)
			.then(function(response) {
				return response ? response : fetch(event.request);
			})
	);
});

