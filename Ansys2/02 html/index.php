<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- 套用font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- 引用bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style2.css" />

    <!-- owl.carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    </link>
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
    </link>
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.min.js"></script>

    <!-- 引用slick -->
    <link rel="stylesheet" href="slick-1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="slick-1.8.1/slick/slick-theme.css" />
    <script src="slick-1.8.1/slick/slick.js"></script>


    <!-- 引用favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <title>Ansys資源網站</title>

    <style>
    * {
        /* outline: 1px solid rgb(221, 144, 144); */
        /* text-decoration: none !important; */
        margin: 0;
        padding: 0;
    }
    </style>
</head>

<body>
    <div class="max-width-container">
        <?php require "incHeader.php"; ?>
        <div class="banner-wrap">
            <!-- desktop -->
            <div class="owl-carousel owl-theme banner-sizeL">
                <div class="item item1">
                    <a href="#">
                        <img src="images/Banner-1.jpg" alt="">
                    </a>
                </div>
                <div class="item item2">
                    <a href="#">
                        <img src="images/Banner-1.jpg" alt="">
                    </a>
                </div>
            </div>
            <!-- phone -->
            <div class="owl-carousel owl-theme banner-sizeS">
                <div class="item item1">
                    <a href="#">
                        <img src="images/index-banner-phone.jpg" alt="">
                    </a>
                </div>
                <div class="item item2">
                    <a href="#">
                        <img src="images/index-banner-phone.jpg" alt="">
                    </a>
                </div>

            </div>

        </div>

        <!--主區塊：main-1-->
        <div class="index-content-container">
            <!-- 桌機板佔了60% -->
            <div class="index-content-wrap">
                <!--  what's new膠囊區-桌機版 -->
                <a href="#" class="whats-new-btn-wrap">
                    <div class="whats-new-btn-left">
                        <!-- 開新分頁 target="_blank" -->
                        <div class="index-icon mr-3" onclick="window.open('4-2-LatestNews.html')">
                            <img src="images/speaker.png" alt="" />
                        </div>
                        <p>What's New</p>
                    </div>
                    <div class="whats-new-btn-right">
                        <p>
                            汽車電氣化趨勢從根本上打破了國外大廠壟斷汽車動力總成系統的
                            局面，也為台灣廠商帶來切入市場的絕佳契機。
                            汽車電氣化趨勢從根本上打破了國外大廠壟斷汽車動力總成系統的
                            局面，也為台灣廠商帶來切入市場的絕佳契機。
                        </p>
                        <!-- 開新分頁 target="_blank" -->
                        <div class="index-icon" onclick="window.open('4-2-LatestNews.html')">
                            <img src="images/click.png" alt="" />
                        </div>
                    </div>
                </a>
                <!--  what's new膠囊區-手機版 -->
                <a href="#" class="whats-new-btn-wrap-phone">
                    <div class="whatsnewbtn-phone-top">
                        <div class="index-icon pr-3">
                            <img src="images/speaker.png" alt="" />
                        </div>
                        <p>What's New</p>
                    </div>
                    <div class="whatsnewbtn-phone-bottom">
                        <p>
                            汽車電氣化趨勢從根本上打破了國外大廠壟斷汽車動力總成系統的
                            局面，也為台灣廠商帶來切入市場的絕佳契機。
                            汽車電氣化趨勢從根本上打破了國外大廠壟斷汽車動力總成系統的
                            局面，也為台灣廠商帶來切入市場的絕佳契機。
                        </p>
                        <div class="index-icon" onclick="window.open('4-2-LatestNews.html')">
                            <img src="images/click.png" alt="" />
                        </div>
                    </div>
                </a>
                <!-- 最新活動section -->
                <div class="section-1">
                    <div class="title mt-5 mb-4">
                        <span>最新活動</span>
                    </div>
                    <div class="text-18-dark m-4">
                        實體活動、線上研討會，及和 Channel Partners co-marketing的活動等
                    </div>

                    <!-- slick輪播牆  -->
                    <div class="slider">
                        <div class="slider-item">
                            <a class="index-pic" href="lecture-youtube.html">
                                <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg" />
                            </a>
                            <a class="index-content" href="lecture-youtube.html">
                                <p class="videoDate">2022-07-15</p>
                                <p class="videoIntro">
                                    Ansys IC 設計驗證系列論壇 - #2 3D
                                    時代的封裝設計與先進製程...
                                </p>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a class="index-pic" href="lecture-youtube.html">
                                <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg" />
                            </a>
                            <a class="index-content" href="lecture-youtube.html">
                                <p class="videoDate">2022-07-15</p>
                                <p class="videoIntro">
                                    Ansys IC 設計驗證系列論壇 - #2 3D
                                    時代的封裝設計與先進製程...
                                </p>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a class="index-pic" href="lecture-youtube.html">
                                <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg" />
                            </a>
                            <a class="index-content" href="lecture-youtube.html">
                                <p class="videoDate">2022-07-15</p>
                                <p class="videoIntro">
                                    Ansys IC 設計驗證系列論壇 - #2 3D
                                    時代的封裝設計與先進製程...
                                </p>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a class="index-pic" href="lecture-youtube.html">
                                <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg" />
                            </a>
                            <a class="index-content" href="lecture-youtube.html">
                                <p class="videoDate">2022-07-15</p>
                                <p class="videoIntro">
                                    Ansys IC 設計驗證系列論壇 - #2 3D
                                    時代的封裝設計與先進製程...
                                </p>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a class="index-pic" href="lecture-youtube.html">
                                <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg" />
                            </a>
                            <a class="index-content" href="lecture-youtube.html">
                                <p class="videoDate">2022-07-15</p>
                                <p class="videoIntro">
                                    Ansys IC 設計驗證系列論壇 - #2 3D
                                    時代的封裝設計與先進製程...
                                </p>
                            </a>
                        </div>
                    </div>

                    <button type="button" class="yellow-btn" onclick="location.href='1-1-LatestActivity.html'">
                        更多活動
                    </button>
                </div>
                <!-- 觀看影片section -->
                <div class="section-1">
                    <div class="title mt-5 mb-4">
                        <span>觀看影片</span>
                    </div>
                    <div class="text-18-dark m-4">
                        課程影片、活動影片，及YouTube 或 Product Video等
                    </div>

                    <!-- slider輪播牆  -->
                    <div class="slider">
                        <div class="slider-item">
                            <a class="index-pic" href="lecture-youtube.html">
                                <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg" />
                            </a>
                            <a class="index-content" href="lecture-youtube.html">
                                <p class="videoDate">2022-07-15</p>
                                <p class="videoIntro">
                                    Ansys IC 設計驗證系列論壇 - #2 3D
                                    時代的封裝設計與先進製程...
                                </p>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a class="index-pic" href="lecture-youtube.html">
                                <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg" />
                            </a>
                            <a class="index-content" href="lecture-youtube.html">
                                <p class="videoDate">2022-07-15</p>
                                <p class="videoIntro">
                                    Ansys IC 設計驗證系列論壇 - #2 3D
                                    時代的封裝設計與先進製程...
                                </p>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a class="index-pic" href="lecture-youtube.html">
                                <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg" />
                            </a>
                            <a class="index-content" href="lecture-youtube.html">
                                <p class="videoDate">2022-07-15</p>
                                <p class="videoIntro">
                                    Ansys IC 設計驗證系列論壇 - #2 3D
                                    時代的封裝設計與先進製程...
                                </p>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a class="index-pic" href="lecture-youtube.html">
                                <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg" />
                            </a>
                            <a class="index-content" href="lecture-youtube.html">
                                <p class="videoDate">2022-07-15</p>
                                <p class="videoIntro">
                                    Ansys IC 設計驗證系列論壇 - #2 3D
                                    時代的封裝設計與先進製程...
                                </p>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a class="index-pic" href="lecture-youtube.html">
                                <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg" />
                            </a>
                            <a class="index-content" href="lecture-youtube.html">
                                <p class="videoDate">2022-07-15</p>
                                <p class="videoIntro">
                                    Ansys IC 設計驗證系列論壇 - #2 3D
                                    時代的封裝設計與先進製程...
                                </p>
                            </a>
                        </div>
                    </div>

                    <button type="button" class="yellow-btn" onclick="location.href='2-1-film.html'">
                        更多影片
                    </button>
                </div>
            </div>
        </div>

        <!--主區塊：main-2（有灰色背景照片）-->
        <div class="index-content-container2">
            <!-- 桌機板佔了60% -->
            <div class="index-content-wrap">
                <!-- 資源下載section -->
                <div class="section-1">
                    <div class="title margin-title mb-4">
                        <span>資源下載</span>
                    </div>
                    <div class="text-18-dark m-4">
                        課程簡報、白皮書等
                    </div>

                    <!-- slider輪播牆  -->
                    <div class="slider">
                        <div class="slider-item">
                            <a class="index-pic" href="lecture-youtube.html">
                                <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg" />
                            </a>
                            <a class="index-content" href="lecture-youtube.html">
                                <p class="videoDate">2022-07-15</p>
                                <p class="videoIntro">
                                    Ansys IC 設計驗證系列論壇 - #2 3D
                                    時代的封裝設計與先進製程...
                                </p>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a class="index-pic" href="lecture-youtube.html">
                                <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg" />
                            </a>
                            <a class="index-content" href="lecture-youtube.html">
                                <p class="videoDate">2022-07-15</p>
                                <p class="videoIntro">
                                    Ansys IC 設計驗證系列論壇 - #2 3D
                                    時代的封裝設計與先進製程...
                                </p>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a class="index-pic" href="lecture-youtube.html">
                                <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg" />
                            </a>
                            <a class="index-content" href="lecture-youtube.html">
                                <p class="videoDate">2022-07-15</p>
                                <p class="videoIntro">
                                    Ansys IC 設計驗證系列論壇 - #2 3D
                                    時代的封裝設計與先進製程...
                                </p>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a class="index-pic" href="lecture-youtube.html">
                                <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg" />
                            </a>
                            <a class="index-content" href="lecture-youtube.html">
                                <p class="videoDate">2022-07-15</p>
                                <p class="videoIntro">
                                    Ansys IC 設計驗證系列論壇 - #2 3D
                                    時代的封裝設計與先進製程...
                                </p>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a class="index-pic" href="lecture-youtube.html">
                                <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg" />
                            </a>
                            <a class="index-content" href="lecture-youtube.html">
                                <p class="videoDate">2022-07-15</p>
                                <p class="videoIntro">
                                    Ansys IC 設計驗證系列論壇 - #2 3D
                                    時代的封裝設計與先進製程...
                                </p>
                            </a>
                        </div>
                    </div>

                    <button type="button" class="yellow-btn" onclick="location.href='3-1-download.html'">
                        更多資源
                    </button>
                </div>
                <!-- 最新消息section -->
                <div class="section-1">
                    <div class="title mt-5 mb-4">
                        <span>最新消息</span>
                    </div>
                    <div class="text-18-dark m-4">
                        新聞、最新文章等
                    </div>

                    <!-- slider輪播牆  -->
                    <div class="slider">
                        <div class="slider-item">
                            <a class="index-pic" href="lecture-youtube.html">
                                <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg" />
                            </a>
                            <a class="index-content" href="lecture-youtube.html">
                                <p class="videoDate">2022-07-15</p>
                                <p class="videoIntro">
                                    Ansys IC 設計驗證系列論壇 - #2 3D
                                    時代的封裝設計與先進製程...
                                </p>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a class="index-pic" href="lecture-youtube.html">
                                <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg" />
                            </a>
                            <a class="index-content" href="lecture-youtube.html">
                                <p class="videoDate">2022-07-15</p>
                                <p class="videoIntro">
                                    Ansys IC 設計驗證系列論壇 - #2 3D
                                    時代的封裝設計與先進製程...
                                </p>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a class="index-pic" href="lecture-youtube.html">
                                <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg" />
                            </a>
                            <a class="index-content" href="lecture-youtube.html">
                                <p class="videoDate">2022-07-15</p>
                                <p class="videoIntro">
                                    Ansys IC 設計驗證系列論壇 - #2 3D
                                    時代的封裝設計與先進製程...
                                </p>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a class="index-pic" href="lecture-youtube.html">
                                <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg" />
                            </a>
                            <a class="index-content" href="lecture-youtube.html">
                                <p class="videoDate">2022-07-15</p>
                                <p class="videoIntro">
                                    Ansys IC 設計驗證系列論壇 - #2 3D
                                    時代的封裝設計與先進製程...
                                </p>
                            </a>
                        </div>

                        <div class="slider-item">
                            <a class="index-pic" href="lecture-youtube.html">
                                <img alt="" src="http://img.youtube.com/vi/qQ8eaBaTEt4/mqdefault.jpg" />
                            </a>
                            <a class="index-content" href="lecture-youtube.html">
                                <p class="videoDate">2022-07-15</p>
                                <p class="videoIntro">
                                    Ansys IC 設計驗證系列論壇 - #2 3D
                                    時代的封裝設計與先進製程...
                                </p>
                            </a>
                        </div>
                    </div>

                    <button type="button" class="yellow-btn" onclick="location.href='4-1-LatestNews.html'">
                        更多消息
                    </button>
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php require "incFooter.php"; ?>

    </div>
</body>




<!-- 漢堡選單 -->
<script>
$(document).ready(() => {
    $(".hamBar").click(function() {
        //避免 a 標籤會觸發
        // event.preventDefault();
        //觸發展開收起來
        $(".header__nav").toggleClass("show");
    });
    $(".header__nav li a").click(function() {
        //移除class，才會讓 menu 消失
        $(".header__nav").removeClass("show");
    });
});
</script>

<!-- 首頁輪播牆  -->
<script>
var owl = $(".owl-carousel");
owl.owlCarousel({
    items: 1,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
});
$(".play").on("click", function() {
    owl.trigger("play.owl.autoplay", [1000]);
});
$(".stop").on("click", function() {
    owl.trigger("stop.owl.autoplay");
});
</script>

<!-- 內文區的輪播牆  -->
<script>
$(".slider").slick({
    autoplay: false,
    dots: true,
    arrows: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    customPaging: function(slider, i) {
        var thumb = $(slider.$slides[i]).data();
        return '<a class="dot">' + i + "</a>";
    },
    responsive: [{
            breakpoint: 1400,
            settings: {
                dots: true,
                arrows: true,
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 1024,
            settings: {
                dots: true,
                arrows: true,
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 991,
            settings: {
                dots: true,
                arrows: true,
                infinite: false,
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 768,
            settings: {
                dots: true,
                arrows: true,
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});
</script>

</html>