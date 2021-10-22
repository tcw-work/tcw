<body id="top">
    <div id="app">
        <ul>
            <li>
                <a href="#section1" v-smooth-scroll v-smooth-scroll="{ duration: 1000, offset: -50 }">セクション1</a>
            </li>
            <li>
                <a href="#section2" v-smooth-scroll v-smooth-scroll="{ duration: 1000, offset: -50 }">セクション2</a>
            </li>
            <li>
                <a href="#section3" v-smooth-scroll v-smooth-scroll="{ duration: 1000, offset: -50 }">セクション3</a>
            </li>
        </ul>
        <div id="section1">
            セクション1のコンテンツ
        </div>
        <div id="section2">
            セクション2のコンテンツ
        </div>
        <div id="section3">
            セクション3のコンテンツ
        </div>
        <div v-scroll="handleScroll" 
             class="top-scroll"
             :class="{visible: visible}">
            <a href="#top" v-smooth-scroll>トップへ戻る</a>
        </div>
    </div>
    
    
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background: #fff;
        }

        li:not(:first-child) {
            margin-left: 20px;
        }

        li a {
            text-decoration: none;
            color: tomato;
            border: 1px solid;
            padding: 4px;
            transition: all 80ms ease-in;
        }

        li a:hover {
            background: tomato;
            color: #fff;
        }

        #app {
            height: 1000px;
            padding-top: 50px;
        }

        #section1,
        #section2,
        #section3{
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #section1,
        #section3 {
            background: #ccc;
        }

        #section2 {
            background: #eee;
        }

        a[href="#top"] {
            position: fixed;
            bottom: 50px;
            right: 10px;
            z-index: 100;
            text-decoration: none;
            background: tomato;
            color: #fff;
            padding: 10px 20px;
        }

        .top-scroll {
            opacity: 0;
            transition: opacity 200ms ease-in;
        }

        .top-scroll.visible {
            opacity: 1;
        }
    </style>
    
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    
    <script>
        // Codepenの為、importは省略(設定から呼び出し)
         import Vue from 'vue'
         import vueSmoothScroll from 'vue-smooth-scroll'

        Vue.use(VueSmoothScroll)

        // 必ずVueインスタンス作成前に登録する
        Vue.directive('scroll', {
            inserted: function (el, binding) {
                let f = function (evt) {
                    if (binding.value(evt, el)) {
                        window.removeEventListener('scroll', f)
                    }
                };
                window.addEventListener('scroll', f)
            }
        });

        // Vueインスタンス作成
        const app = new Vue({
            el: '#app',
            data: {
                visible: false // 表示・非表示判定を格納
            },
            methods: {
                handleScroll() {
                    // スクロール値が151以上の場合にvisibleをtrue、そうでない場合にfalseにする
                    this.visible = window.pageYOffset > 150;
                }
            }
        });
    </script>
</body>