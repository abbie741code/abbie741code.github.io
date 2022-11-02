<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 引用bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style2.css">

    <!-- 套用font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- 套用faviccon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">






    <title>Ansys資源網站-登入</title>

    <style>
    * {
        /* outline: 1px solid rgb(221, 144, 144); */

    }
    </style>
</head>

<body class="otherPage body">
    <div class="menuBack"></div>
    <div class="proclamation nonBg close">
        <div class="proclamation-wrap">
            <div class="proclamation-content">
                <div class="proclamation-close"></div>
                <p>
                    您的密碼為您的手機號碼
                </p>
            </div>

        </div>
    </div>

    <? require "incHeader.php"; ?>

    <!-- 登入section -->
    <div class="content form">
        <h3>登入</h3>
        <div class="blank-alert">
            <i class="far fa-times-circle"></i> 驗證碼錯誤! <br>
            <i class="far fa-times-circle"></i> 驗證碼錯誤!
        </div>
        <form action="">
            <div class="blank">請輸入e-mail</div>
            <input type="email" name="" id="">
            <div class="blank">請輸入密碼</div>
            <input type="password" name="" id="">

            <!-- <button class="btn-basic">登入</button> -->
            <div class="btn-wrap">
                <a href="index.html" class="btn-basic">登入</a>
            </div>

        </form>
        <div class="switch">
            <a href="0-2-register.html">切換至註冊</a>/
            <a href="javascript:;" id="announce">忘記密碼</a>
        </div>
    </div>

    <!-- footer -->
    <? require "incFooter.php"; ?>



</body>

<!-- 引用google host JQ CDN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
let announce = document.getElementById('announce');
let proclamationClose = document.getElementsByClassName('proclamation-close')[0];
let proclamation = document.getElementsByClassName('proclamation')[0];
let body = document.getElementsByClassName('body')[0];

// proclamation.classList.toggle('close');
// body.classList.toggle('menuStock');

announce.addEventListener('click', function() {
    proclamation.classList.toggle('close');
    body.classList.toggle('menuStock');

});
proclamationClose.addEventListener('click', function() {
    proclamation.classList.toggle('close');
    body.classList.toggle('menuStock');

});
</script>

<!-- 漢堡選單 -->
<script>
$(document).ready(() => {
    $('.hamBar').click(function() {
        //避免 a 標籤會觸發
        event.preventDefault();
        //觸發展開收起來
        $('.header__nav').toggleClass('show');
    })
    $('.header__nav li a').click(function() {
        //移除class，才會讓 menu 消失
        $('.header__nav').removeClass('show');
        //以下是滾動動畫
        // var sectionTitle = this.title;
        // console.log(sectionTitle);
        // var sectionId = "#section--" + sectionTitle;
        // console.log(sectionId);
        // var scrollPoint = $(sectionId).offset().top;
        // var lastScrollPoint = scrollPoint - 100;
        // $("html,body").animate({ scrollTop: lastScrollPoint }, 800);
    })
});
</script>

</html>