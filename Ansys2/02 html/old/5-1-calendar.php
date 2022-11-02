<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ansys資源網站-我的課程</title>



    <meta property="og：url" content="#">
    <meta property="og：type" content="website" />
    <meta property="og：title" content="#" />
    <meta property="og：description" content="#" />
    <meta property="og：image" content="images/share.jpg" />
    <meta name="description" content="#" />

    <!-- 引用bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


    <link rel="stylesheet" href="css/reset.css">
    <!-- 原先的日曆css -->
    <link rel="stylesheet" href="css/style-for-calendar.css">
    <link rel="stylesheet" href="css/style2.css">

    <!-- 套用font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- 引用favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

</head>

<body>

    <? require "incHeader.php"; ?>

    <div class="content">
        <div class="dropdown-wrap">
            <div class="dropdown">
                <div class="select">
                    <span>2022</span>
                    <img src="images/btn-select-arrow.svg" alt="">
                </div>
                <ul class="dropdown-menu">
                    <li><a href="javascript:;">2022</a></li>
                    <li><a href="javascript:;">2023</a></li>
                    <li><a href="javascript:;">2024</a></li>
                </ul>
            </div>
            <div class="dropdown month">
                <div class="select">
                    <span>MARCH</span>
                    <img src="images/btn-select-arrow.svg" alt="">
                </div>
                <ul class="dropdown-menu">
                    <li><a href="javascript:;">JANUARY</a></li>
                    <li><a href="javascript:;">FEBRUARY</a></li>
                    <li><a href="javascript:;">MARCH</a></li>
                    <li><a href="javascript:;">APRIL</a></li>
                    <li><a href="javascript:;">MAY</a></li>
                    <li><a href="javascript:;">JUNE</a></li>
                    <li><a href="javascript:;">JULY</a></li>
                    <li><a href="javascript:;">AUGUST</a></li>
                    <li><a href="javascript:;">SEPTEMBER</a></li>
                    <li><a href="javascript:;">OCTOBER</a></li>
                    <li><a href="javascript:;">NOVEMBER</a></li>
                    <li><a href="javascript:;">DECEMBER</a></li>
                </ul>
            </div>
            <div class="btn-current">
                <a href="javascript:;">本月課程</a>
            </div>
        </div>
        <div class="show-course">

            <div class="show-course-blank"></div>
            <div class="show-course-content">
                <div class="show-course-content-btn tooth">
                    <a class="active" href="javascript:;">ALL</a>
                    <a href="javascript:;">WEEK 1</a>
                    <a href="javascript:;">WEEK 2</a>
                    <a href="javascript:;">WEEK 3</a>
                    <a href="javascript:;">WEEK 4</a>
                    <a href="javascript:;">WEEK 5</a>
                </div>
                <div class="show-course-content-btn pullSelect">
                    <div class="dropdown week">
                        <div class="select">
                            <span>ALL</span>
                            <img src="images/btn-select-arrow.svg" alt="">
                        </div>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:;">ALL</a></li>
                            <li><a href="javascript:;">WEEK 1</a></li>
                            <li><a href="javascript:;">WEEK 2</a></li>
                            <li><a href="javascript:;">WEEK 3</a></li>
                            <li><a href="javascript:;">WEEK 4</a></li>
                            <li><a href="javascript:;">WEEK 5</a></li>
                            <li><a href="javascript:;">WEEK 6</a></li>
                        </ul>
                    </div>
                </div>

                <div class="course-result">
                    <!-- 本週無課程 -->
                    <div class="week" style="display: none;">
                        <div class="course noCourse">
                            <p class="no-course">本週無課程</p>
                        </div>
                    </div>

                    <!-- WEEK1 -->
                    <div class="week1" style="display: block;display: none;">
                        <div class="course">
                            <div class="course-date">
                                <div class="day">01</div>
                                <div class="which">WEDNESDAY</div>
                            </div>
                            <div class="course-date-abstract-wrap">
                                <div class="course-date-abstract">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="#" target="_blank" class="btn-online-video">觀看線上影片</a>
                                </div>
                                <div class="course-date-abstract">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="#" target="_blank" class="btn-online-video">觀看線上影片</a>
                                </div>
                            </div>
                        </div>

                        <div class="course">
                            <div class="course-date">
                                <div class="day">25</div>
                                <div class="which">MONDAY</div>
                            </div>
                            <div class="course-date-abstract-wrap">
                                <div class="course-date-abstract registering">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="javascript:;" style="cursor: default;" target="_blank"
                                        class="btn-invalid">報名已截止</a>
                                </div>

                            </div>
                        </div>
                        <div class="course">
                            <div class="course-date">
                                <div class="day">28</div>
                                <div class="which">THURSDAY</div>
                            </div>
                            <div class="course-date-abstract-wrap">
                                <div class="course-date-abstract registering">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="#" target="_blank" class="btn-register">立即報名</a>
                                </div>
                                <div class="course-date-abstract registering">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="#" target="_blank" class="btn-register">立即報名</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- WEEK2 -->
                    <div class="week1" style="display: block;">
                        <div class="course">
                            <div class="course-date">
                                <div class="day">01</div>
                                <div class="which">WEDNESDAY</div>
                            </div>
                            <div class="course-date-abstract-wrap">
                                <div class="course-date-abstract">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="#" target="_blank" class="btn-online-video">觀看線上影片</a>
                                </div>
                                <div class="course-date-abstract">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="#" target="_blank" class="btn-online-video">觀看線上影片</a>
                                </div>
                            </div>
                        </div>

                        <div class="course">
                            <div class="course-date">
                                <div class="day">25</div>
                                <div class="which">MONDAY</div>
                            </div>
                            <div class="course-date-abstract-wrap">
                                <div class="course-date-abstract registering">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="javascript:;" style="cursor: default;" target="_blank"
                                        class="btn-invalid">報名已截止</a>
                                </div>

                            </div>
                        </div>
                        <div class="course">
                            <div class="course-date">
                                <div class="day">28</div>
                                <div class="which">THURSDAY</div>
                            </div>
                            <div class="course-date-abstract-wrap">
                                <div class="course-date-abstract registering">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="#" target="_blank" class="btn-register">立即報名</a>
                                </div>
                                <div class="course-date-abstract registering">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="#" target="_blank" class="btn-register">立即報名</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- WEEK3 -->
                    <div class="week1" style="display: none;">
                        <div class="course">
                            <div class="course-date">
                                <div class="day">01</div>
                                <div class="which">WEDNESDAY</div>
                            </div>
                            <div class="course-date-abstract-wrap">
                                <div class="course-date-abstract">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="#" target="_blank" class="btn-online-video">觀看線上影片</a>
                                </div>
                                <div class="course-date-abstract">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="#" target="_blank" class="btn-online-video">觀看線上影片</a>
                                </div>
                            </div>
                        </div>

                        <div class="course">
                            <div class="course-date">
                                <div class="day">25</div>
                                <div class="which">MONDAY</div>
                            </div>
                            <div class="course-date-abstract-wrap">
                                <div class="course-date-abstract registering">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="javascript:;" style="cursor: default;" target="_blank"
                                        class="btn-invalid">報名已截止</a>
                                </div>

                            </div>
                        </div>
                        <div class="course">
                            <div class="course-date">
                                <div class="day">28</div>
                                <div class="which">THURSDAY</div>
                            </div>
                            <div class="course-date-abstract-wrap">
                                <div class="course-date-abstract registering">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="#" target="_blank" class="btn-register">立即報名</a>
                                </div>
                                <div class="course-date-abstract registering">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="#" target="_blank" class="btn-register">立即報名</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- WEEK4 -->
                    <div class="week1" style="display: none;">
                        <div class="course">
                            <div class="course-date">
                                <div class="day">01</div>
                                <div class="which">WEDNESDAY</div>
                            </div>
                            <div class="course-date-abstract-wrap">
                                <div class="course-date-abstract">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="#" target="_blank" class="btn-online-video">觀看線上影片</a>
                                </div>
                                <div class="course-date-abstract">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="#" target="_blank" class="btn-online-video">觀看線上影片</a>
                                </div>
                            </div>
                        </div>

                        <div class="course">
                            <div class="course-date">
                                <div class="day">25</div>
                                <div class="which">MONDAY</div>
                            </div>
                            <div class="course-date-abstract-wrap">
                                <div class="course-date-abstract registering">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="javascript:;" style="cursor: default;" target="_blank"
                                        class="btn-invalid">報名已截止</a>
                                </div>

                            </div>
                        </div>
                        <div class="course">
                            <div class="course-date">
                                <div class="day">28</div>
                                <div class="which">THURSDAY</div>
                            </div>
                            <div class="course-date-abstract-wrap">
                                <div class="course-date-abstract registering">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="#" target="_blank" class="btn-register">立即報名</a>
                                </div>
                                <div class="course-date-abstract registering">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="#" target="_blank" class="btn-register">立即報名</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- WEEK5 -->
                    <div class="week1" style="display: none;">
                        <div class="course">
                            <div class="course-date">
                                <div class="day">01</div>
                                <div class="which">WEDNESDAY</div>
                            </div>
                            <div class="course-date-abstract-wrap">
                                <div class="course-date-abstract">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="#" target="_blank" class="btn-online-video">觀看線上影片</a>
                                </div>
                                <div class="course-date-abstract">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="#" target="_blank" class="btn-online-video">觀看線上影片</a>
                                </div>
                            </div>
                        </div>

                        <div class="course">
                            <div class="course-date">
                                <div class="day">25</div>
                                <div class="which">MONDAY</div>
                            </div>
                            <div class="course-date-abstract-wrap">
                                <div class="course-date-abstract registering">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="javascript:;" style="cursor: default;" target="_blank"
                                        class="btn-invalid">報名已截止</a>
                                </div>

                            </div>
                        </div>
                        <div class="course">
                            <div class="course-date">
                                <div class="day">28</div>
                                <div class="which">THURSDAY</div>
                            </div>
                            <div class="course-date-abstract-wrap">
                                <div class="course-date-abstract registering">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="#" target="_blank" class="btn-register">立即報名</a>
                                </div>
                                <div class="course-date-abstract registering">
                                    <div class="time">14:00-16:00</div>
                                    <div class="theme">透過Ansys optiSLang建構設計流程及模擬分析的Web-app</div>
                                    <a href="#" target="_blank" class="btn-register">立即報名</a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="course show-course-btn">
                        <a class="btn-month btn-month-last" href="#">
                            LAST MONTH
                        </a>
                        <a class="btn-month btn-month-next" href="#">
                            NEXT MONTH
                        </a>
                    </div>



                </div>

            </div>


        </div>
    </div>



    <!-- footer -->
    <? require "incFooter.php"; ?>

</body>

<!-- 引用google host JQ CDN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- 日曆 -->
<script type="text/javascript">
// $('.dropdown').find('.dropdown-menu').slideToggle(300);
$('.dropdown').click(function() {
    $(this).attr('tabindex', 1).focus();
    $(this).toggleClass('active');
    $(this).find('.dropdown-menu').slideToggle(300);
});
$('.dropdown').focusout(function() {
    $(this).removeClass('active');
    $(this).find('.dropdown-menu').slideUp(300);
});
$('.dropdown .dropdown-menu li').click(function() {
    $(this).parents('.dropdown').find('span').text($(this).text());
    $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));
});
/*End Dropdown Menu*/
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