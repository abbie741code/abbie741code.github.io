<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- 引用bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style2.css">

    <!-- 套用font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- 引用favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <title>
        Ansys資源網站-資源下載
    </title>

    <style>
    * {
        /* outline: 1px solid rgb(221, 144, 144); */
        text-decoration: none !important;
    }
    </style>
</head>


<body class="otherPage">
    <? require "incHeader.php"; ?>


    <!-- 內文 -->
    <div class="content-container">
        <div class="content-wrap">
            <div class="title margin">
                <span>最新消息</span>
            </div>

            <form action="">
                <select id="topic" name="topic">
                    <option value="">
                        年份
                    </option>
                    <option value="">
                        2019
                    </option>
                    <option value="">
                        2020
                    </option>
                    <option value="">
                        2021
                    </option>
                    <option value="">
                        2022
                    </option>
                </select>

                <select id="topic" name="topic">
                    <option value="">
                        月份
                    </option>
                    <option value="">
                        1
                    </option>
                    <option value="">
                        2
                    </option>
                    <option value="">
                        3
                    </option>
                    <option value="">
                        4
                    </option>
                    <option value="">
                        5
                    </option>
                    <option value="">
                        6
                    </option>
                    <option value="">
                        7
                    </option>
                    <option value="">
                        8
                    </option>
                    <option value="">
                        9
                    </option>
                    <option value="">
                        10
                    </option>
                    <option value="">
                        11
                    </option>
                    <option value="">
                        12
                    </option>
                </select>

                <input id="" name="" placeholder="請輸入關鍵字" type="text">

                <button class="btn-search icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>


            </form>

            <div class="s03-keyword margin">
                <label class="btn-keyword ">
                    <input name="" type="checkbox" value="kw-all" class="input-kw-all" checked>
                    <span>全部</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-new-activity" class="input-kw-other">
                    <span>最新活動</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-ed-video" class="input-kw-other">
                    <span>影片教學</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-download" class="input-kw-other">
                    <span>資源下載</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-new" class="input-kw-other">
                    <span>最新消息</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-new-activity" class="input-kw-other">
                    <span>最新活動</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-ed-video" class="input-kw-other">
                    <span>影片教學</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-download" class="input-kw-other">
                    <span>資源下載</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-new" class="input-kw-other">
                    <span>最新消息</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-new-activity" class="input-kw-other">
                    <span>最新活動</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-ed-video" class="input-kw-other">
                    <span>影片教學</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-download" class="input-kw-other">
                    <span>資源下載</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-new" class="input-kw-other">
                    <span>最新消息</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-new-activity" class="input-kw-other">
                    <span>最新活動</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-ed-video" class="input-kw-other">
                    <span>影片教學</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-download" class="input-kw-other">
                    <span>資源下載</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-new" class="input-kw-other">
                    <span>最新消息</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-new-activity" class="input-kw-other">
                    <span>最新活動</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-ed-video" class="input-kw-other">
                    <span>影片教學</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-download" class="input-kw-other">
                    <span>資源下載</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-new" class="input-kw-other">
                    <span>最新消息</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-new-activity" class="input-kw-other">
                    <span>最新活動</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-ed-video" class="input-kw-other">
                    <span>影片教學</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-download" class="input-kw-other">
                    <span>資源下載</span>
                </label>

                <label class="btn-keyword kw-other">
                    <input name="" type="checkbox" value="kw-new" class="input-kw-other">
                    <span>最新消息</span>
                </label>
            </div>

            <div class="video-all">
                <div class="video-wrap kw-all kw-new-activity ">
                    <a class="videoPic" href="4-2-LatestNews.html">
                        <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg">
                    </a>
                    <a class="videoContent" href="lecture-youtube.html">
                        <p class="videoDate">
                            2022-07-15
                        </p>
                        <p class="videoIntro">
                            kw-new-activity Ansys IC 設計驗證系列論壇 - #2 3D 時代的封裝設計與先進製程...
                        </p>
                    </a>
                </div>

                <div class="video-wrap kw-all  kw-new-activity ">
                    <a class="videoPic" href="4-2-LatestNews.html">
                        <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg">
                    </a>
                    <a class="videoContent" href="lecture-youtube.html">
                        <p class="videoDate">
                            2022-07-15
                        </p>
                        <p class="videoIntro">
                            kw-new-activity Ansys IC 設計驗證系列論壇 - #2 3D 時代的封裝設計與先進製程...
                        </p>
                    </a>
                </div>

                <div class="video-wrap kw-all  kw-new-activity ">
                    <a class="videoPic" href="4-2-LatestNews.html">
                        <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg">
                    </a>
                    <a class="videoContent" href="lecture-youtube.html">
                        <p class="videoDate">
                            2022-07-15
                        </p>
                        <p class="videoIntro">
                            kw-new-activity Ansys IC 設計驗證系列論壇 - #2 3D 時代的封裝設計與先進製程...
                        </p>
                    </a>
                </div>

                <div class="video-wrap  kw-all kw-download">
                    <a class="videoPic" href="4-2-LatestNews.html">
                        <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg">
                    </a>
                    <a class="videoContent" href="lecture-youtube.html">
                        <p class="videoDate">
                            2022-07-15
                        </p>
                        <p class="videoIntro">
                            kw-download Ansys IC 設計驗證系列論壇 - #2 3D 時代的封裝設計與先進製程...
                        </p>
                    </a>
                </div>

                <div class="video-wrap kw-all kw-download">
                    <a class="videoPic" href="4-2-LatestNews.html">
                        <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg">
                    </a>
                    <a class="videoContent" href="lecture-youtube.html">
                        <p class="videoDate">
                            2022-07-15
                        </p>
                        <p class="videoIntro">
                            kw-download Ansys IC 設計驗證系列論壇 - #2 3D 時代的封裝設計與先進製程...
                        </p>
                    </a>
                </div>

                <div class="video-wrap  kw-all kw-download">
                    <a class="videoPic" href="4-2-LatestNews.html">
                        <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg">
                    </a>
                    <a class="videoContent" href="lecture-youtube.html">
                        <p class="videoDate">
                            2022-07-15
                        </p>
                        <p class="videoIntro">
                            kw-download Ansys IC 設計驗證系列論壇 - #2 3D 時代的封裝設計與先進製程...
                        </p>
                    </a>
                </div>


                <div class="video-wrap kw-all kw-download">
                    <a class="videoPic" href="4-2-LatestNews.html">
                        <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg">
                    </a>
                    <a class="videoContent" href="lecture-youtube.html">
                        <p class="videoDate">
                            2022-07-15
                        </p>
                        <p class="videoIntro">
                            kw-download Ansys IC 設計驗證系列論壇 - #2 3D 時代的封裝設計與先進製程...
                        </p>
                    </a>
                </div>

                <div class="video-wrap  kw-all kw-new">
                    <a class="videoPic" href="4-2-LatestNews.html">
                        <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg">
                    </a>
                    <a class="videoContent" href="lecture-youtube.html">
                        <p class="videoDate">
                            2022-07-15
                        </p>
                        <p class="videoIntro">
                            kw-new Ansys IC 設計驗證系列論壇 - #2 3D 時代的封裝設計與先進製程...
                        </p>
                    </a>
                </div>

            </div>

        </div>
    </div>





    <!-- footer -->
    <? require "incFooter.php"; ?>



</body>
<!-- 引用google host JQ CDN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



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

<!-- 篩選功能 -->
<script>
$('label').click(function() {
    // $(this).trigger('click');
});

let checkList = []

//當按下tag按鈕時
$('input').click(function() {
    var type = $(this).attr('value');
    var checked = $(this).prop("checked");
    // console.log(type)

    //假設該tag按鈕被反checked
    if (!checked) {
        $('.' + type).hide(500);
        console.log(type + '55')

        //找出和type一樣的物件,定義為searchTag
        const searchTag = (element) => element == type;
        // console.log(checkList.findIndex(searchTag));

        //找出searchTag在checkList是第幾位,定義為tagNumber
        const tagNumber = checkList.findIndex(searchTag)
        // console.log(tagNumber)

        //將checkList中的tagNumber刪除
        checkList.splice(tagNumber, 1)
        // console.log(checkList)

        for (let i = 0; i < checkList.length; i++) {
            $('.' + checkList[i]).show(500);
        }



    } else { //假設該tag按鈕被checked
        $('.' + type).show(500);
        checkList.push(type)
        // console.log(type + '66')
        // console.log(checkList)
    }


    //在「ALL按鈕」被checked的情況下，按了「其他按鈕」，
    //先將「ALL按鈕」的checked刪除，並將所有box清空，
    //再重新show出被點選按鈕的box
    if ($('.input-kw-all').prop("checked")) {
        if (type !== 'kw-all') {
            // console.log('input-kw-all')
            $('.kw-all').hide(500);
            $('.input-kw-all').prop('checked', false);
            $('.' + type).show(500);
        }
    }

    //判斷是否有「其他按鈕」被checked
    var isChecked = $('.input-kw-other:checked').length > 0
    console.log(isChecked)

    //在有「其他按鈕」被checked的情況下，按了「ALL按鈕」，
    //先將「其他按鈕」的checked刪除，
    //再show全部box
    if (isChecked) {
        if (type === 'kw-all') {
            // console.log('input-kw-other')
            $('.input-kw-other').prop('checked', false);
            $('.kw-all').show(500);
            checkList = []
        }
    }

    // //在「其他按鈕」被checked的情況下，按了「ALL按鈕」，
    // //先將「其他按鈕」的checked刪除，
    // //再show全部box
    // if ($('.input-kw-other').prop("checked")) {
    //   // console.log($('.input-kw-other').prop("checked"))
    //   if (type === 'kw-all') {
    //     // console.log('input-kw-other')
    //     $('.input-kw-other').prop('checked', false);
    //     $('.kw-all').show(500);
    //     checkList = []
    //   }
    // }



});
</script>

</html>