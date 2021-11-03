<?php
$c_name=$_POST['c_name'];
$c_company=$_POST['c_company'];
$c_address=$_POST['c_address'];
//$c_content=$_POST['c_content'];
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$c_name = htmlspecialchars($c_name);
$c_name_emp = "";
$c_company= htmlspecialchars($c_company);
$c_company_emp = "";
$c_address= htmlspecialchars($c_address);
$c_address_emp = "";
//                 ↓サニタイジングと変数の格納を同時に行ってもよい
$c_content = htmlspecialchars($_POST['c_content'],ENT_QUOTES);
$c_content_emp = "";

$result_input02 = "";

if(empty ($_POST['c_name'])) {
    $c_name = '';
    $c_name_emp = '<span class="caution">※お名前が入力されていません。</span>';
}
if(empty ($_POST['c_company'])) {
    $c_company = '';
    $c_company_emp = '<span class="caution">※会社名が入力されていません。</span>';
}
if(empty ($_POST['c_address'])) {
    $c_address = '';
    $c_address_emp = '<span class="caution">※メールアドレスが入力されていません。</span>';
}
if(empty ($_POST['c_content'])) {
    $c_content = '';
    $c_content_emp = '<span class="caution">※お問い合わせ内容が入力されていません。</span>';
}
if(empty ($_POST['c_name']) or empty ($_POST['c_address']) or empty ($_POST['c_content'])) {
    //    $submit =
    $result_input02=" result-input02";
    //    ↑送信ボタンの非表示;
    $result_block_one=" result_block_one";
}else {
    $result_block_one="";
}

//if (isset($_POST["submit"])) {
//    //$action = $_POST['action'];
//    $mail = "以下の内容が送信されました。\n\n";
//    $mail = "【お名前】\n";
//    $mail = $c_name."\n\n";
//    $mail = "【メールアドレス】\n";
//    $mail = $c_company."\n\n";
//    $mail = "【お問い合わせ内容】\n";
//    $mail = $c_content."\n\n";
//
//    $mail_to = "m.tomizawa821@gmail.com";//送信先メールアドレス
//    $mail_subject = "メールフォームより送信されました";//メールの件名
//    $mail_body = $mail;//メールの本文
//    $mail_header = "from:".$c_company;//フォームで入力されたメールアドレスを送信元として表示する
//
//    //↓送信先からエラーなどがあった際に通知されるアドレス
//    $returnPath = '-f'.'m.tomizawa821@gmail.com';
//    $mailsend = mb_send_mail($mail_to, $mail_subject, $mail_body, $mail_header, $returnPath);
//}
?>


<!DOCTYPE html>
<html lang="jp">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
<!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>TCW トミザワ・クリエイティブ ワークス お問い合わせ確認ページ</title>
        <meta name="description" content="TCW（トミザワ クリエイティブ ワークス）は、webサイト、ホームページの制作を随時承っております。個人で事業を営むクライアント様、一部制作をご依頼したい制作会社様からの業務等もご対応致します。フリーランスとして柔軟なご対応が可能ですので、お気軽にご連絡ください。">
        <meta name="keyword" content="tcw,トミザワクリエイティブワークス,web制作,ホームページ作成,webデザイン,webコーディング,保守運用,フロントエンドエンジニア,フリーランス">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--        particles.js-->
        <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js?date=202108028"></script>
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
    </head>


    <body class="drawer drawer--top p-p_under">
        <?php include('../header.php');?>
        
        <main class="p-p_portfolio p-p_works p-p_contact">
            <div class="f-wrap">
                <div class="f-wrap-inner">
                    <div id="p-contact" class="p_confirm">
                        <h2 class="c-head_2">Contact</h2>
                        <div class="p-c_sub_ttl">
                            <ul>
                                <li>入力</li>
                                <li class="p-c_s_correct">確認</li>
                                <li>完了</li>
                            </ul>
                        </div>
                        <form action="contact-last.php" method="post">
                           
                            <div class="form-block">
                                <div class="form-topic">
                                    お名前（<span>必須</span>）
                                </div>
                                <div class="form-input">
                                    <?php print $c_name;?><?php print $c_name_emp;?>
                                </div>
                            </div>
                            <div class="form-block">
                                <div class="form-topic">
                                    会社名
                                </div>
                                <div class="form-input">
                                    <?php print $c_company?><?php print $c_company_emp;?>
                                </div>
                            </div>
                            
                            <div class="form-block">
                                <div class="form-topic">
                                    メールアドレス（<span>必須</span>）
                                </div>
                                <div class="form-input">
                                    <?php print $c_address?><?php print $c_address_emp;?>
                                </div>
                            </div>

                            <div class="form-block">
                                <div class="form-topic">
                                    お問い合わせ内容（<span>必須</span>）
                                </div>
                                <div class="form-input">
                                    <?php print $c_content;?><?php print $c_content_emp;?>
                                </div>
                            </div>
                            
                            <!--                    ↓送信用のデータを変数で格納-->
                            <input type="hidden" value="<?php echo $c_name; ?>" name="c_name"/>
                            <input type="hidden" value="<?php echo $c_company; ?>" name="c_company"/>
                            <input type="hidden" value="<?php echo $c_address; ?>" name="c_address"/>
                            <input type="hidden" value="<?php echo $c_content; ?>" name="c_content"/>
                            <div class="result-block<?PHP echo $result_block_one ?>">
                            <input type="button" onclick="history.back()" value="戻る" class="result-input result-input01">
                            <input type="button" onclick="submit();" value="送信" class="result-input<?PHP echo $result_input02 ?>" name="sub">
                            </div>
                            
                        </form>
                        <div class="p-c_address">
                            <p>※もし送信されない場合は、下記の連絡先に直接お問い合わせください。</p>
                            <div class="icons">
                                <div class="icon-block"><span class="c_icon"><img src="../image/icon-mail.png" alt=""><a href="mailto:m.tomizawa@t-creative-works.com">tomizawa@t-creative-works.com</a></span></div>
                                <div class="icon-block"><span class="c_icon"><img src="../image/icon-tell.png" alt=""><a href="tel:+81-50-3199-1487">050-3199-1487</a></span></div>
<!--                                <div class="icon-block"><span class="c_icon"><img src="../image/icon-twitter.png" alt=""><a href="https://twitter.com/tcw_job" target="_blank">Twitter</a></span></div>-->
                            </div>
                        </div>
                    </div>
                  
                    
                </div>
            </div>
        </main>
        <?php include('../footer.php');?>


</html>