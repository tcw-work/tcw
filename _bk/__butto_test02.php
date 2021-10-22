<html lang="ja"><head>
    <meta charset="utf-8">



    </head>
    <body>
        <h1>矢印が繰返し動くCSSアニメーション</h1>
        <br>
        <br>
        <div class="m-scroll">
            <p>Scroll</p>
            <a href="#" class="m-arrow"></a>
        </div>



    </body></html>


<style>
    body {
        font-family: 'Noto Serif JP', serif;
        line-height: 1.6;
        font-weight: 700;
        -webkit-text-size-adjust: 100%;
    }
    
    .m-scroll {
        width: 100px;
        height: 100px;
        font-size: 18px;
        font-weight: bold;
    }
    .m-arrow {
        position: relative;
        width: 66px;
        margin: 0 auto;
        height: 38px;
    }
    .m-arrow::before {
        animation: arrow 2.5s infinite;
        border: solid #FF0000;
        border-width: 0 0 3px 3px;
        content: "";
        margin: auto;
        position: absolute;
        top: -24px;
        left: 16px;
        transform: rotate(
            -45deg);
        width: 15px;
        height: 15px;
        transition: all 0.3s ease-in-out;
    }
    .m-arrow:hover::before {
        border: solid #ccc;
        border-width: 0 0 5px 5px;

    }

    @keyframes arrow {
        0% {
            transform: rotate(-45deg) translate(0, 0);
        }
        60% {
            transform: rotate(-45deg) translate(-20px, 20px);
        }
        0%, 60%, 100% {
            opacity: 0;
        }
        30% {
            opacity: 1;
        }
    }
</style>