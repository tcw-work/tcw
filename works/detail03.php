<!DOCTYPE html>
<html lang="jp">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>TCW トミザワ・クリエイティブ ワークス  ポートフォリオ「引用・出典ジェネレーター」解説ページ</title>
        <meta name="description" content="TCW（トミザワ クリエイティブ ワークス）は、webサイト、ホームページの制作を随時承っております。個人で事業を営むクライアント様、一部制作をご依頼したい制作会社様からの業務等もご対応致します。フリーランスとして柔軟なご対応が可能ですので、お気軽にご連絡ください。">
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
        <meta property="og:description" content="TCW（トミザワ・クリエイティブワークス）は、webサイト、ホームページの制作を随時承っております。個人で事業を営むクライアント様、一部制作をご依頼したい制作会社様からの業務等もご対応致します。フリーランスとして柔軟なご対応が可能ですので、お気軽にご連絡ください。">
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
            function gtag(){dataLayer.push(arguments);}
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
                      <h2 class="c-head_2">引用・出典ジェネレーター</h2>
                      <div class="p-detail_pic">
                          <img src="../image/detail-mv03.jpg" alt="引用・出典ジェネレーター MV">
                      </div>
                      <div class="p-content_block">
                          <h3 class="c-head_3">Concept</h3>
                          <div class="p-detail-des">
                              <p>学術論文を作成する際に、参考文献から引用・出典リストを自動で作成するためのツールを製作しました（一部未実装）。</p>
                              <p>学術系の引用や出典リストの作成には、意外と細かなルールがあり、項目の並び順なども記載事項の有無によって異なってきます。そのため、論文やレポートを作成する際に、逐一調べながら出典リストを書いている学生も多いのです。</p>
                              <p>そんな手間の掛かる作業を簡略化するために製作しているのが、このツールです。</p>
                              <p>ユーザーは筆者名や著書名などの項目を入力するだけで、複雑な出典リストを自動で簡単に作成できます。</p>
                              <p></p>
                          </div>
                      </div>
                      <div class="p-content_block">
                          <h3 class="c-head_3">Design</h3>
                          <div class="p-detail-des">
                              <p>デザインに関しましては、白のメインカラーに対して黄色と黒のアクセントカラーを織り交ぜて、スタイリッシュな形にしました。</p>
                              <p>ジェネレーターとしての役割を強く意識しましたので、見せすぎるデザインにならないように、派手な装飾などは加えておりませんが、結果的によりシンプルなサイトデザインへと様変わりしました。</p>
                          </div>
                      </div>
                      <div class="p-content_block">
                          <h3 class="c-head_3">Marketing・Persona</h3>
                          <div class="p-detail-des">
                              <p>主なペルソナは学生となっていますが、研究者の方たちにも役立つツールとなっています。</p>
                              <p>私自身も学生時代に出典の記述に苦しめられた経験もあるため、「<b class="bold">自分が体験した問題</b>」を題材としました。</p>
                              <p>その為、論文を作成する方々の身に寄り添ったツールともなっています。</p>
                          </div>
                      </div>
                      <div class="p-content_block">
                          <h3 class="c-head_3">Coding</h3>
                          <div class="p-detail-des">
                              <p>ScssとBootstrapの組み合わせたコーディングを行い、効率化を図りました。</p>
                              <p>また、PHPの条件分岐を使っているため、ページ遷移して結果を出力する仕様となっています（後にJavascriptでページ遷移せず表示できるようにカスタマイズする予定です）。</p>
                              <p>特別なコーディング技術は使用していませんが、フォーム部分等もPHPを使用して自作するなど、サーバーサイド言語の理解をより深める目的を持って制作いたしました。</p>
                          </div>
                      </div>
                      <div class="p-content_block">
                          <h3 class="c-head_3">Point</h3>
                          <div class="p-detail-point">
                              <ul>
                                  <li>
                                      <div class="p-point_box">
                                          <div class="p-box_pic">
                                              <p>Concept</p>
                                              <img src="../image/detail-point03-01.jpg" alt="画像：学生・研究者たちが抱えている悩みに着目した便利ツール">
                                          </div>
                                          <p class="p-box_des">学生・研究者たちが抱えている悩みに着目した便利ツール</p>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="p-point_box">
                                          <div class="p-box_pic">
                                              <p>Technique</p>
                                              <img src="../image/detail-point03-02.jpg" alt="画像：ScssとBootstrap等を組み合わせた効率的な設計">
                                          </div>
                                          <p class="p-box_des">ScssとBootstrap等を組み合わせた効率的な設計</p>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="p-point_box">
                                          <div class="p-box_pic">
                                              <p>Design</p>
                                              <img src="../image/detail-point03-03.jpg" alt="画像：黄色と黒、白を組み合わせたシンプルなサイトデザイン">
                                          </div>
                                          <p class="p-box_des">黄色と黒、白を組み合わせたシンプルなサイトデザイン</p>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="p-point_box">
                                          <div class="p-box_pic">
                                              <p>Development</p>
                                              <img src="../image/detail-point02-04.jpg" alt="画像：保守運用 イメージ">
                                          </div>
                                          <p class="p-box_des">PHPを用いたサーバーサイドでの開発</p>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="p-content_infor">
                          <ul>
                              <li>
                                  <dl>
                                      <dt>Release Date</dt>
                                      <dd class="p-_post_date">2020.12.01</dd>
                                  </dl>
                              </li>
                              <li>
                                  <dl>
                                      <dt>URL</dt>
                                      <dd class="p-_post_url"><a href="https://citation.t-creative-works.com/" target="_blank">https://citation.t-creative-works.com/</a></dd>
                                  </dl>
                              </li>
                          </ul>
                      </div>
                  </div>
                   
                    <div id="p-port_card">
                      <h2 class="c-head_2">Other Works</h2>
                       
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
                        <div id="p-port_works" class="p-port_block">
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
                        </div>
                        <div id="p-port_works" class="p-port_block">
                            <h3 class="c-head_3">TCW-トミザワ・クリエイティブワークス</h3>
                            <div class="p-port_inner">
                                <div class="p-port_img">
                                    <div class="p-port_img_in">
                                        <a href="/works/detail04.php">
                                            <img src="../image/t-cont03.jpg" alt="TCW-トミザワ・クリエイティブワークス">
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
                    </div>
                    
                    
                </div>
            </div>
        </main>
        <?php include('../footer.php');?>


</html>