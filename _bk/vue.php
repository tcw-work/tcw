<!DOCTYPE html>
<html lang="jp">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--        particles.js-->
        <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js?date=202108028"></script>
        <!-- CSS定義 -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
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

    </head>


    <body class="drawer drawer--top">
        
        <div id="app01">
            <p>{{message}}</p>
        </div>
        <div id="app02">
            <p>{{count}}回クリックしました</p>
            <button v-on:click='countUp'>カウントを増やす</button>
            <!--            ↑v-onでクリックした際にカウントアップを実行-->
<!--            v-on:clickを省略して<button @:click='countUp'>で書くことも可能-->

            <!--            vueの属性(ここではv-text)の属性でhtmlに表示-->
            <div v-text='count'></div>
            
<!--            ↓vueでの条件分岐には「v-if」のディレクティブ（属性）を使う-->
<!--           現時点でcountは0、つまりfalseなので表示はされない。これがturuになれば表示される（クリックするだけ）-->
            <div v-if='count'>条件次第で表示</div>
            
<!--            ↓「v-for」は繰り返しを行うディレクティブ。繰り返したい要素にのみ使用-->
            <ul>
<!--                ↓「items」をインスタンスで表記して紐づける-->
<!--               in以外の名前（itemとitems）はなんでもいい。基本的に右の名前に対して左はsをつけると分かりやすい-->
                <li v-for='item in items'>{{ item }}</li>
            </ul>
            
<!--            ↓htmlの属性とvueのデータを連動させるときに使用-->
       <div v-bind:class="color_test">カラー</div>
<!--            v-bind:の後にはidやクラスなどのhtmlの属性を指定して代入できる-->
<!--            ※<div class="{{ color }}"></div>←vueの{{}}はタグとタグの間では使用可能だが、タブの内部では使用不可-->
<!--       これはvueのルールとして覚えておく-->
      
<!--           ↓v-bindやv-onは使用頻度が高いので、下記のように省略できる-->
            <div :class="color_test">カラーv-binnd省略</div>
       
<!--       ↓v-modelはvueの醍醐味のディレクティブ。htmlとdataの双方向の連携formのインプットタグなどと使用される。-->
            <div :class="color_v_model">color_v_modelのカラーテスト</div>
<!--            ↓html側（ブラウザ）のinputに入れた値をvueのdata属性に反映することが出来る。
           v-bvindではdataからhtmlへの一方通行の代入だったがv-modelは逆も可能-->
<!--           ※※※引用・出典ジェネレーターの「,」の自走生成にも使えそう-->
            <input type="text" v-model='color_v_model'>
            
<!--            ↓上のinputデータに対して何らかの処理を行ってから値を表示する。今回はinputに入力し内容を大文字にして隣に表示する-->
            {{ computed_test }}
<!--            算出プロパティ。入力した値を別の場所に表示したいとき-->
<!--           ※※※引用・出典ジェネレーターの「,」の自走生成にも使えそう-->
            
            
<!--
            TCWで実装できそうなこと
            ①スムーススクロール
-->
       
<!--
            引用・出典ジェネレーターの手順
            ①<input type="text" v-model='color_v_model'>でテキストが入力
            ②その要素にcommaというクラス（span）を追加 ※ここをどうやるか…
            ③追加したクラスに対して「,」を表示するようにしておく
-->
            
            
        </div>
        
        
        <style>
            .green {
                color: green;
            }
            .blue {
                color: blue;
            }
        </style>
        
        
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script>
            //        b\vue devtools（クロームの拡張機能）があれば、データの確認をブラウザで可能

            //        ディレクティブ＝vueの属性（HTMLでいうimgなどの中の< src="" alt="">など、機能を追加するやつ）
            //        vueの属性は「v-」から始まるのが特徴

            //        ↓インスタンスの作成
            new Vue({
                el: '#app01',
                //            ↑el:でvue.jsの指定範囲を決定
                data: {
                    message: 'Vue.jsで表示中'
                }
                //            ↑data:はvueで使える変数なようなもの。vueではこのdata:を使うことでhtmlと連動可能
            })

            new Vue({
                el: '#app02',
                data: {
                    //        ↓カウント実行のメソッズを定義（jqueryは数字部分のdomの取得が必要だがvueなら簡潔に書けのがメリット）
                    count:0,
                    items:[1,2,3],
//                    ↑[]で配列にする。三回分itemsを繰り返し表示
                    color_test: 'red',
//                    ↑htmlのv-bindと連動（今回はcolor_testというクラスを追加）
                    color_v_model: ''
                },
//                ↑カウントの関数を使うためにmethodsプロパティを使用
                methods: {
                    //                ↓countUpは関数
                    countUp:function(){
                        //                    alert('test')
                        //                    ↑alertで確認しても良い
                        this.count = this.count +1
                        //thisは「new Vue」から下のvueインスタンスを指す。そのインスタンスの中のdata（htmlの「count」）にアクセス。
                        //                    ※先ほどの「data:{}は省略される」
                        //                  二つ目の「this.count」に対して「this.count」の数字を＋1するという意味
                    }
                },
//                ↓算出プロパティ
                computed: {
                    computed_test:function() {
//                        ↑{{ computed_test }}に代入するために定義。算出プロパティに関しては関数のような処理が行われるので、function()を入れる。
                        return this.color_v_model.toUpperCase();
//                        ↑computedの算出プロパティにはretuernを必ずかけてブラウザに返す。
//                        this＝このvueのインスタンスに対して。（※color_v_model: ''のあるdataの中にはthis.を使ってのアクセスができないため、新しくcomputedを設ける必要がある）
//                        color_v_model＝inputの「color_v_model」を指定
//                        inputに入力した値を大きくする「toUpperCase」という処理をかける
                    }
                }
            })

        </script>
    </body>
</html>