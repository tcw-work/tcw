<head>
    <script src="../js/jquery-3.5.0.min.js"></script>
</head>

<div class="inputBox">
    <input type="text" class="style2" /><label>会社名</label><span class="border"></span>
</div>



<style>

    
    
    .inputBox {
        position: relative;
        width: 200px;
        margin: 0 0 50px 0;
    }
    .inputBox input {
        outline: none;
        width: 100%;
        font-size: 14px;
        -webkit-transition: 0.3s;
        -moz-transition: 0.3s;
        -ms-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;
    }
    .inputBox label {
        -webkit-transition: 0.3s;
        -moz-transition: 0.3s;
        -ms-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;
        position: absolute;
        color: #aaa;
    }

    .inputBox input.style2 {
        padding: 8px;
    }
    .inputBox input.style2 ~ label {
        top: 7px;
        left: 8px;
    }
    .inputBox input.style2:focus,
    .inputBox input.style2.isVal {
        border-color: #EBC70A;
    }
    .inputBox input.style2:focus ~ label,
    .inputBox input.style2.isVal ~ label {
        top: -17px;
        left: 0;
        font-size: 11px;
        color: #EBC70A;
    }


</style>


<script>

//    $(function(){
//        $(".inputBox input").focusout(function(){
//            if($(this).val() != ""){
//                $(this).addClass("isVal");
//            }else{
//                $(this).removeClass("isVal");
//            }
//        });
//    });
</script>