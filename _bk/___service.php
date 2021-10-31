<!DOCTYPE html>
<html lang="jp">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
<!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>TCW トミザワ・クリエイティブ ワークス サービスページ</title>
        <meta name="description" content="TCW（トミザワ クリエイティブ ワークス）は、webサイト、ホームページの制作を随時承っております。個人で事業を営むクライアント様、一部制作をご依頼したい制作会社様からの業務等もご対応致します。フリーランスとして柔軟なご対応が可能ですので、お気軽にご連絡ください。">
        <meta name="keyword" content="tcw,トミザワクリエイティブワークス,web制作,ホームページ作成,webデザイン,webコーディング,保守運用,フロントエンドエンジニア,フリーランス">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--        particles.js-->
        <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js?date=202108028"></script>
        <!-- CSS定義 -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
<!--        <link rel="stylesheet" type="text/css" href="utility/u-color.css">-->
        <link rel="stylesheet" href="css/fundations/reset.css">
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:400,500,700&display=swap" rel="stylesheet">
        
<!--        ↓ドロワーメニュー-->
        <!-- JS定義 -->
        <script src="js/jquery-3.5.0.min.js"></script>
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
        <meta property="og:description" content="TCW（トミザワ・クリエイティブワークス）は、webサイト、ホームページの制作を随時承っております。個人で事業を営むクライアント様、一部制作をご依頼したい制作会社様からの業務等もご対応致します。フリーランスとして柔軟なご対応が可能ですので、お気軽にご連絡ください。">
        <meta property="og:locale" content="ja_JP">
        <meta property="”fb:app_id”" content="”App-ID(15文字の半角数字)”">

        <!--    favicon-->
        <link rel="shortcut icon" href="image/favicon.gif" type="image/gif">
        <link rel="icon" href="image/favicon.gif" type="image/gif">
        <!--    スマホ用アイコン画像-->
        <link rel="apple-touch-icon-precomposed" href="image/touch-icon.png">
        <!--    電話番号やメールアドレスの変換設定防止タグ-->
        <meta name="format-detection" content="email=no,telephone=no,address=no">
    </head>


    <body class="drawer drawer--top p-p_under">
        <?php include('header.php');?>
        
        <main class="p-p_portfolio p-p_works p-p_service">
            <div class="f-wrap">
                <div class="f-wrap-inner">
                 
                    <div id="p-service">
                        <h2 class="c-head_2">Service</h2>
                        <div class="p-service_pic">
                            <img src="image/service-mv01.jpg" alt="">
                        </div>
                        
                        <div class="p-s_about">
                            <p>サービスページをご観覧いただき、誠にありがとうございます。こちらではWeb制作のご依頼に関する詳細や大まかな金額、業務内容などを掲載しております。</p>
                            <p>また、お客様のご希望に寄り添ったサイト制作を目指すと共に、下記のようなご要望にも随時対応しております。</p>
                            <div class="p-comment p-comment-last">
                                <p class="p-comment_left"></p>
                                <p class="p-comment_right">お値段の交渉をしたい</p>
                            </div>
                               <div class="p-comment p-comment-first">
                                <p class="p-comment_left"></p>
                                <p class="p-comment_right">コーディングだけお願いしたい</p>
                            </div>
                            <div class="p-comment p-comment-last">
                                <p class="p-comment_left"></p>
                                <p class="p-comment_right">人手不足の為、常駐案件を依頼したい</p>
                            </div>
                            <p>このようなご相談にも柔軟に対応いたしますので、お気軽にお問い合わせ下さい。</p>
                        </div>
                        
                        <div class="p-s_request p-s_block" id="p-s_b_01">
                            <h2 class="c-head_2">ご依頼内容について</h2>
                            <div class="p-s_r_box">
                                <div class="p-box_left">
                                    <p><span>様々なご依頼を受付中です。</span>お客様のプランに合わせて、部分的にご依頼していただく事も可能ですので、右記以外にもご要望等ごさいましたら、いつでもお申し付け下さい。</p>
                                </div>
                                <div class="p-box_right">
                                    <ul>
                                        <li>
                                            <dl>
                                                <a href="#p-s_d_b01" v-smooth-scroll="{ duration: 1200, offset: 0 }">
                                                <dt><img src="image/r_detail_01.jpg" alt=""><span>コーディング</span></dt>
                                                    <dd>静的サイトのコーディングからWordpressへの組込みなどのページ作成を行います。</dd>
                                                </a>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <a href="#p-s_d_b02" v-smooth-scroll="{ duration: 1200, offset: 0 }">
                                                <dt><img src="image/r_detail_02.jpg" alt=""><span>デザイン</span></dt>
                                                <dd>サイト全体、もしくはページ単位での制作も可能です。</dd>
                                                </a>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <a href="#p-s_d_b03" v-smooth-scroll="{ duration: 1200, offset: 0 }">
                                                <dt><img src="image/r_detail_03.jpg" alt=""><span>保守・運用</span></dt>
                                                <dd>サイトの更新、管理等の保守運用もお任せください。</dd>
                                                </a>
                                            </dl>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-s_detail">
                                <div class="p-s_d_block" id="p-s_d_b01">
                                    <h3 class="c-head_3">コーディングのご依頼</h3>
                                    <dl>
                                        <dt><img src="image/r_detail_01.jpg" alt=""></dt>
                                        <dd>
                                            <p>フロントエンドエンジニアとしての実務経験を基に、ご要望に合わせたコーディングを行います。UIを意識し、ユーザーへ直感的に情報を伝えるサイト、スライドやアニメーションなどの動きのあるサイト制作も可能です。</p>
                                            <p>また、Wordpressへの組込みやホームページのレスポンシブ化（スマホ対応）なども承っております。</p>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="p-s_d_block" id="p-s_d_b02">
                                    <h3 class="c-head_3">デザインのご依頼</h3>
                                    <dl>
                                        <dt><img src="image/r_detail_02.jpg" alt=""></dt>
                                        <dd>
                                            <p>お客様のイメージする理想像を基に、適切なデザイン作成を行います。</p>
                                            <p>サイトコンセプトから提案、フレームワーク（下書き）の作成など、お客様に最適なデザインをご提供いたします。</p>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="p-s_d_block" id="p-s_d_b03">
                                    <h3 class="c-head_3">保守・運用のご依頼</h3>
                                    <dl>
                                        <dt><img src="image/r_detail_03.jpg" alt=""></dt>
                                        <dd>
                                            <p>保守運用につきましては、サイトの規模や更新頻度、内容によって料金が異なりますので、お客様とヒアリングをさせていただく形になっております。</p>
                                            <p>お客様のご要望に寄り添った契約を第一とさせていただきますので、是非一度お気軽にご相談下さい。</p>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="p-s_price p-s_block" id="p-s_b_02">
                            <h2 class="c-head_2">料金について</h2>
                            <div class="p-s_p_block">
                                <h3 class="c-head_3">コーディング</h3>
                                <table>
                                    <tr>
                                        <th class="th_01"><p>下層ページ</p></th>
                                        <th class="th_02"><p>￥10,000〜20,000円</p></th>
                                    </tr>
                                    <tr>
                                        <th class="th_01"><p>トップページ</p></th>
                                        <th class="th_02"><p>￥20,000〜50,000円</p></th>
                                    </tr>
                                    <tr>
                                        <th class="th_01"><p>LP</p></th>
                                        <th class="th_02"><p>￥10,000〜80,000万円</p></th>
                                    </tr>
                                    <tr>
                                        <th class="th_01"><p>サイトレスポンシブ化</p></th>
                                        <th class="th_02"><p>￥80,000〜100,000円</p></th>
                                    </tr>
                                    <tr>
                                        <th class="th_01"><p>Wordpressへの組み込み</p></th>
                                        <th class="th_02"><p>￥80,000〜100,000円</p></th>
                                    </tr>
                                </table>
                            </div>
                            <div class="p-s_p_block">
                                <h3 class="c-head_3">デザイン</h3>
                                <table>
                                    <tr>
                                        <th class="th_01"><p>トップページ</p></th>
                                        <th class="th_02"><p>￥50,000〜150,000円</p></th>
                                    </tr>
                                    <tr>
                                        <th class="th_01"><p>トップページ スマホ単体</p></th>
                                        <th class="th_02"><p>￥40,000〜100,000円</p></th>
                                    </tr>
                                    <tr>
                                        <th class="th_01"><p>下層</p></th>
                                        <th class="th_02"><p>￥20,000〜50,000万円</p></th>
                                    </tr>
                                    <tr>
                                        <th class="th_01"><p>その他</p></th>
                                        <th class="th_02"><p>※現在LPとバナーのデザインは承っておりませんので、ご了承ください。</p></th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="p-s_others p-s_block" id="p-s_b_03">
                            <h2 class="c-head_2">制作物について</h2>
                            <div id="p-port_works" class="p-port_block">
                                <p class="p-others_des">このサイトでは過去に作成した制作物を掲載しております。Web制作のご依頼をご検討中の方は、下記のサイトを参考にしていただけますと幸いです。</p>
                                <div class="p-others_inner">
                                    <div class="p-others_01">
                                        <a href="/LPE/自主制作/コーディング/works/detail01.php">
                                            <p><img src="image/t-cont01.jpg" alt="Magnific-Japan"><span>Magnific-Japan</span></p>
                                        </a>
                                    </div>
                                    <div class="p-others_01">
                                        <a href="/LPE/自主制作/コーディング/works/detail02.php">
                                            <p><img src="image/t-cont02.jpg" alt="テンツーケア"><span>テンツーケア</span></p>
                                        </a>
                                    </div>
                                    <div class="p-others_01">
                                        <a href="/LPE/自主制作/コーディング/works/detail04.php">
                                            <p><img src="image/t-cont03.jpg" alt="TCW"><span>TCW</span></p>
                                        </a>
                                    </div>
                                    <div class="p-others_01">
                                        <a href="/LPE/自主制作/コーディング/works/detail03.php">
                                            <p><img src="image/t-cont04.jpg" alt="Citation"><span>Citation</span></p>
                                        </a>
                                    </div>
                                    <div class="p-others_01">
                                        <a href="/LPE/自主制作/コーディング/works/test-site/01/">
                                            <p><img src="image/other-work01.jpg" alt="Reen"><span>Reen</span></p>
                                        </a>
                                    </div>
                                    <div class="p-others_01">
                                        <a href="/LPE/自主制作/コーディング/works/test-site/02/">
                                            <p><img src="image/other-work02.jpg" alt="Forkio"><span>Forkio</span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="c-btn">
                                    <p><a href="/LPE/自主制作/コーディング/works.php">一覧を観る</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    
                </div>
            </div>
        </main>
        <?php include('footer.php');?>


</html>