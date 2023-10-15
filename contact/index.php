<!DOCTYPE html>
<html lang="jp">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>TCW トミザワ・クリエイティブ ワークス お問い合わせページ</title>
    <meta name="description"
        content="TCW（トミザワ クリエイティブ ワークス）は、webサイト、ホームページの制作を随時承っております。個人で事業を営むクライアント様、一部制作をご依頼したい制作会社様からの業務等もご対応致します。フリーランスとして柔軟なご対応が可能ですので、お気軽にご連絡ください。">
    <meta name="keyword" content="tcw,トミザワクリエイティブワークス,web制作,ホームページ作成,webデザイン,webコーディング,保守運用,フロントエンドエンジニア,フリーランス">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS定義 -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!--        <link rel="stylesheet" type="text/css" href="utility/u-color.css">-->
    <link rel="stylesheet" href="../css/fundations/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:400,500,700&display=swap" rel="stylesheet">

    <!--        ↓ドロワーメニュー-->
    <!-- JS定義 -->
    <script src="../js/jquery-3.5.0.min.js"></script>
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
    <meta property="og:title" content="TCW トミザワ・クリエイティブワークス">
    <meta property="og:url" content="https://t-creative-works.com/">
    <meta property="og:site_name" content="TCW トミザワ・クリエイティブワークス">
    <meta property="og:description"
        content="TCW（トミザワ・クリエイティブワークス）は、webサイト、ホームページの制作を随時承っております。個人で事業を営むクライアント様、一部制作をご依頼したい制作会社様からの業務等もご対応致します。フリーランスとして柔軟なご対応が可能ですので、お気軽にご連絡ください。">
    <meta property="og:locale" content="ja_JP">
    <meta property="”fb:app_id”" content="”App-ID(15文字の半角数字)”">

    <!--    favicon-->
    <link rel="shortcut icon" href="../image/favicon.gif" type="image/gif">
    <link rel="icon" href="../image/favicon.gif" type="image/gif">
    <!--    スマホ用アイコン画像-->
    <link rel="apple-touch-icon-precomposed" href="../image/touch-icon.png">
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
</head>


<body class="drawer drawer--top p-p_under">
    <?php include('../header.php');?>

    <main class="p-p_portfolio p-p_works p-p_contact">
        <div class="f-wrap">
            <div class="f-wrap-inner">
                <div id="p-contact">
                    <h2 class="c-head_2">Contact</h2>
                    <div class="p-c_about">
                        <p>お仕事のご依頼、ご相談等につきましては、こちらのフォームよりお問い合わせください。確認次第、こちらから折り返しご連絡差し上げます。</p>
                    </div>
                    <div class="p-c_sub_ttl">
                        <ul>
                            <li class="p-c_s_correct">入力</li>
                            <li>確認</li>
                            <li>完了</li>
                        </ul>
                    </div>
                    <form action="contact-confirm.php" method="post" enctype="multipart/form-data">
                        <div class="form-block">
                            <div class="form-topic">
                                お名前（<span>必須</span>）
                            </div>
                            <div class="form-input">
                                <input type="text" id="c_name" name="c_name" placeholder="名前">
                            </div>
                        </div>

                        <div class="form-block">
                            <div class="form-topic">
                                会社名
                            </div>
                            <div class="form-input">
                                <input type="text" id="c_company" name="c_company" placeholder="会社名">
                            </div>
                        </div>

                        <div class="form-block">
                            <div class="form-topic">
                                メールアドレス（<span>必須</span>）
                            </div>
                            <div class="form-input">
                                <input type="text" id="c_address" name="c_address" placeholder="メールアドレス">
                            </div>
                        </div>

                        <div class="form-block">
                            <div class="form-topic">
                                お問い合わせ内容（<span>必須</span>）
                            </div>
                            <div class="form-input">
                                <textarea class="input" id="c_content" name="c_content" rows="7"
                                    placeholder="お問い合わせ内容"></textarea>
                            </div>
                        </div>

                        <div class="form-sub">
                            <div class="c-btn">
                                <!--                                    <p><a href="#">お問い合わせ</a></p>-->
                                <button type="button" class="form_button">
                                    <input type="button" onclick="submit();" value="送信" class="result-input">
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="p-c_address">
                        <p>※もし送信されない場合は、下記の連絡先に直接お問い合わせください。</p>
                        <div class="icons">
                            <div class="icon-block"><span class="c_icon"><img src="../image/icon-mail.png" alt=""><a
                                        href="mailto:m.tomizawa@t-creative-works.com">tomizawa@t-creative-works.com</a></span>
                            </div>
                            <!-- <div class="icon-block"><span class="c_icon"><img src="../image/icon-tell.png" alt=""><a href="tel:+81-50-3199-1487">050-3199-1487</a></span></div> -->
                            <!--                                <div class="icon-block"><span class="c_icon"><img src="../image/icon-twitter.png" alt=""><a href="https://twitter.com/tcw_job" target="_blank">Twitter</a></span></div>-->
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </main>
    <?php include('../footer.php');?>

</html>