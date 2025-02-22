<!DOCTYPE html>
<html lang="jp">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>TCW ポートフォリオ「Source Pack」解説ページ</title>
<meta name="robots" content="noindex">
    <meta name="description"
        content="TCWは、webサイト、ホームページの制作を随時承っております。個人で事業を営むクライアント様、一部制作をご依頼したい制作会社様からの業務等もご対応致します。フリーランスとして柔軟なご対応が可能ですので、お気軽にご連絡ください。">
    <meta name="keyword" content="tcw,web制作,ホームページ作成,webデザイン,webコーディング,保守運用,フロントエンドエンジニア,フリーランス">
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
    <meta property="og:title" content="TCW">
    <meta property="og:url" content="https://t-creative-works.com/">
    <meta property="og:site_name" content="TCW">
    <meta property="og:description"
        content="TCWは、webサイト、ホームページの制作を随時承っております。個人で事業を営むクライアント様、一部制作をご依頼したい制作会社様からの業務等もご対応致します。フリーランスとして柔軟なご対応が可能ですので、お気軽にご連絡ください。">
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

    <main class="p-p_portfolio p-p_works p-p_detail">
        <div class="f-wrap">
            <div class="f-wrap-inner">

                <div id="p-port_detail">
                    <h2 class="c-head_2">Source Pack</h2>
                    <div class="p-detail_pic">
                        <img src="../image/detail-mv03.jpg" alt="Source Pack MV">
                    </div>
                    <div class="p-content_block">
                        <h3 class="c-head_3">Concept</h3>
                        <div class="p-detail-des">
                            <p>学術論文を作成する際に、参考文献から引用・出典リストを誰でも自動で簡単に作成するためのツールを開発しました。</p>
                            <p>学術系の引用や出典リストの作成には、意外と細かなルールがあり、項目の並び順がその都度変化します。そのため、論文やレポートを作成する際に、逐一調べながら出典リストを書いている学生も多いのです。
                            </p>
                            <p>そんな手間の掛かる作業を簡略化するために製作したのが、このツールです。</p>
                            <p>ユーザーは筆者名や著書名などの項目を入力するだけで、複雑な出典リストを自動で簡単に作成できます。</p>
                            <p>このツールを制作するに際して、10を超える出典情報を比較し、その中で一番使われている、論文・レポート作成に最適なスタイルに設定しています。</p>
                        </div>
                    </div>
                    <div class="p-content_block">
                        <h3 class="c-head_3">System</h3>
                        <div class="p-detail-des">
                            <p>このサービスはバニラPHPで開発されており、ログイン認証、出典データの作成削除、履歴検索ユーザースコアなどのロジック作成など、全て1からコードを書いて開発しました。</p>
                            <p>自身のPHPの勉強を兼ねて作成し、MysqlなどでDB操作などの工程も一貫して行いました。</p>
                            <p>また、国立国会図書館が提供するAPIと連携することで、本の名前を入力するだけで必要な情報を取得する機能なども実装いたしました。</p>
                        </div>
                    </div>
                    <div class="p-content_block">
                        <h3 class="c-head_3">Coding</h3>
                        <div class="p-detail-des">
                            <p>基本に忠実なコーディングを行いつつ、Vue.jsを用いてUIを構築しました。</p>
                            <p>また、Firebaseを介したプッシュ通知、PWAによるサイトのアプリ化に加え、ユーザービリティ向上のため、PHPの非同期通信としてAjaxでの処理を行いました。
                            </p>
                            <p>これらの実装によって、よりインタラクティブな作りとなりました。</p>
                            <p>各出典ジェネレーターはJavaScriptを用いてロジックが組まれており、出典を作成するための各パターンに対応しております。</p>
                        </div>
                    </div>
                    <div class="p-content_block">
                        <h3 class="c-head_3">Design Concept（制作済み）</h3>
                        <div class="p-detail-des">
                            <p>デザインはFigmaを用いて制作しました。</p>
                            <p>予めパーツをコンポーネント化し、使い回せる各要素に当てはめて効率化を図りました。</p>
                            <p>また、Googleの検索窓のようにシンプルかつ機能重視なサイト設計となっており、ユーザーがストレスなく使えるように無駄な要素を削ぎ落としました。</p>
                            <p>デザインのモチーフとして「ニューモフィズム」を全体的に反映しており、より立体的で直感的な操作が可能なデザインとなる予定です。</p>
                        </div>
                    </div>
                    <!-- <div class="p-content_block">
                        <h3 class="c-head_3">Point</h3>
                        <div class="p-detail-point">
                            <ul>
                                <li>
                                    <div class="p-point_box">
                                        <div class="p-box_pic">
                                            <p>Concept</p>
                                            <img src="../image/detail-point03-01.jpg"
                                                alt="画像：ユーザーが抱える出典作成時の問題を解決するサービス">
                                        </div>
                                        <p class="p-box_des">ユーザーが抱える出典作成時の問題を解決するサービス</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="p-point_box">
                                        <div class="p-box_pic">
                                            <p>Technique</p>
                                            <img src="../image/detail-point03-02.jpg" alt="画像：PHPで構築した動的サイト">
                                        </div>
                                        <p class="p-box_des">PHPで構築した動的サイト</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="p-point_box">
                                        <div class="p-box_pic">
                                            <p>Design</p>
                                            <img src="../image/detail-point03-03.jpg"
                                                alt="画像：プッシュ通知やAjaxなどフロントとバックエンドが連結する設計">
                                        </div>
                                        <p class="p-box_des">プッシュ通知やAjaxなどフロントとバックエンドが連結する設計</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="p-point_box">
                                        <div class="p-box_pic">
                                            <p>Development</p>
                                            <img src="../image/detail-point02-04.jpg" alt="画像：Figmaとニューモフィズムを用いたUI設計">
                                        </div>
                                        <p class="p-box_des">Figmaとニューモフィズムを用いたUI設計</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="p-content_infor">
                        <ul>
                            <li>
                                <dl>
                                    <dt>Release Date</dt>
                                    <dd class="p-_post_date">2023/11/11</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>URL</dt>
                                    <dd class="p-_post_url"><a href="https://sourcepack.t-creative-works.com/"
                                            target="_blank">https://sourcepack.t-creative-works.com/</a>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="p-port_card">
                    <h2 class="c-head_2">Other Works</h2>
                    <div id="p-port_works" class="p-port_block">
                        <h3 class="c-head_3">里親探しサービス（開発中）</h3>
                        <div class="p-port_inner">
                            <div class="p-port_img">
                                <div class="p-port_img_in">
                                    <a href="https://www.figma.com/design/DCrL3cQlkWhUKXk0sAL8tE/%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC?node-id=0-1&t=hHZzJ7mJqUsLXjIj-0"
                                        target=”_blank”>
                                        <img src="../image/t-cont07.jpg" alt="TCW">
                                        <div class="shadow-box"><span>Check</span></div>
                                    </a>
                                </div>
                            </div>
                            <div class="p-port_des">
                                <p>保護犬・保護猫を抱える団体様と里親希望ユーザー様をマッチングさせるサービスを個人で開発中です。</p>
                                <p>UIUXデザインはほぼ完成に近い状態になったので、イメージをご覧ください。</p>
                                <div class="c-btn">
                                    <p><a href="https://www.figma.com/design/DCrL3cQlkWhUKXk0sAL8tE/%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC?node-id=0-1&t=hHZzJ7mJqUsLXjIj-0"
                                            target=”_blank”>詳しくはコチラ</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="p-port_works" class="p-port_block">
                        <h3 class="c-head_3">TCW Ver.2.0</h3>
                        <div class="p-port_inner">
                            <div class="p-port_img">
                                <div class="p-port_img_in">
                                    <a href="/works/detail05.php">
                                        <img src="../image/t-cont05.jpg" alt="TCW Ver.2.0">
                                        <div class="shadow-box"><span>Check</span></div>
                                    </a>
                                </div>
                            </div>
                            <div class="p-port_des">
                                <p>フロントエンド、バックエンドに関する技術や知識を掲載したサイトの運営をしております。</p>
                                <p>自身のアウトプット用メモとして活用し、私のレベル感をご確認頂く際の参考にしてもらえますと幸いです。</p>
                                <a href="/works/detail05.php"></a>
                                <div class="c-btn">
                                    <p><a href="/works/detail05.php">詳しくはコチラ</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="p-port_works" class="p-port_block">
                        <h3 class="c-head_3">旧TCW</h3>
                        <div class="p-port_inner">
                            <div class="p-port_img">
                                <div class="p-port_img_in">
                                    <a href="/works/detail04.php">
                                        <img src="../image/t-cont03.jpg" alt="旧TCW">
                                        <div class="shadow-box"><span>Check</span></div>
                                    </a>
                                </div>
                            </div>
                            <div class="p-port_des">
                                <p>フリーランスとして独立する際に、ポートフォリオ等の役割を担うサイトとして制作しました。</p>
                                <p>今現在ご覧いただいているこのページと同サイトであり、シンプルかつモダンな雰囲気を意識した作りとなっております。</p>
                                <div class="c-btn">
                                    <p><a href="/works/detail04.php">詳しくはコチラ</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="p-port_works" class="p-port_block">
                        <h3 class="c-head_3">Magnific-Japan</h3>
                        <div class="p-port_inner">
                            <div class="p-port_img">
                                <div class="p-port_img_in">
                                    <a href="/works/detail01.php">
                                        <img src="../image/t-cont01.jpg" alt="Magnific-Japan">
                                        <div class="shadow-box"><span>Check</span></div>
                                    </a>
                                </div>
                            </div>
                            <div class="p-port_des">
                                <p>日本の「あまり知られていない現地情報」を海外へ発信することをコンセプに、個人で制作いたしました。</p>
                                <p>こちらはデザインからWordPressへの組み込み等、全ての作業を一人で行ったサイトとなっております。</p>
                                <div class="c-btn">
                                    <p><a href="/works/detail01.php">詳しくはコチラ</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div id="p-port_works" class="p-port_block">
                        <h3 class="c-head_3">テンツーケア</h3>
                        <div class="p-port_inner">
                            <div class="p-port_img">
                                <div class="p-port_img_in">
                                    <a href="/works/detail02.php">
                                        <img src="../image/t-cont02.jpg" alt="テンツーケア">
                                        <div class="shadow-box"><span>Check</span></div>
                                    </a>
                                </div>
                            </div>
                            <div class="p-port_des">
                                <p>民間救急搬送を行うテンツーケア様のサイトを制作させていただきました。</p>
                                <p>デザインを含め全ての工程を担当、現在でも保守運用を行わせていただいております。</p>
                                <a href="/works/detail02.php"></a>
                                <div class="c-btn">
                                    <p><a href="/works/detail02.php">詳しくはコチラ</a></p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>


            </div>
        </div>
    </main>
    <?php include('../footer.php');?>


</html>