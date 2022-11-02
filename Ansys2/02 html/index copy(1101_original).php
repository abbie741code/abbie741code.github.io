<?
require "siteAdmin/asset/sysCore/sysConfig.php";
require "siteAdmin/asset/sysCore/function.php";

$sql="SELECT * FROM tb_sysinfo";
$sysInfo=$db->query($sql)->fetch();

if(!$_SESSION["memberLogin"]){
	$_SESSION["redirect"]="index";
	$flashMsg->error("<i class='fas fa-exclamation-circle fa-lg'></i> 請先登入會員!", "login", true);
}

$sql="SELECT * FROM tb_post WHERE p_type='activity' AND p_show='y' ORDER BY p_date DESC LIMIT 8";
$listActivity=$db->query($sql)->fetchAll();

$sql="SELECT * FROM tb_post WHERE p_type='video' AND p_show='y' ORDER BY p_date DESC LIMIT 8";
$listVideo=$db->query($sql)->fetchAll();

$sql="SELECT * FROM tb_post WHERE p_type='download' AND p_show='y' ORDER BY p_date DESC LIMIT 8";
$listDownload=$db->query($sql)->fetchAll();

$sql="SELECT * FROM tb_post WHERE p_type='news' AND p_show='y' ORDER BY p_date DESC LIMIT 8";
$listNews=$db->query($sql)->fetchAll();

$sql="SELECT * FROM tb_adv WHERE a_type='adv' AND a_show='y' ORDER BY a_date DESC";
$listBanner=$db->query($sql)->fetchAll();

$sql="SELECT * FROM tb_adv WHERE a_type='whatsnew' AND a_show='y' ORDER BY a_date DESC";
$listWhatsnew=$db->query($sql)->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <base href="<? echo _BASEURL; ?>">
    
    <!-- 套用font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- 引用bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous" /> -->

    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style2.css" />

    <!-- owl.carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.min.js"></script>

    <!-- 引用slick -->
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/slick-theme.css"/>
    <script src="css/slick.js"></script>

    <!-- 引用favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>Ansys資源網站</title>
    <meta name="Keywords" content="<?echo $sysInfo[" s_keyword"]; ?>">
    <meta name="Description" content="<?echo $sysInfo[" s_describe"]; ?>">

   
    <!-- 縮圖照片 -->
    <meta property="og:image" content="https://www.ansys.com.tw/video/images/a-logo.png" />
    
    <style>
    * {
        /* outline: 1px solid rgb(221, 144, 144); */
        /* text-decoration: none !important; */
        margin: 0;
        padding: 0;
    }

    ._container {
		height: 36px;
		overflow: hidden;
		text-align: center;
		/* margin: 300px auto; */
		padding: 0;
	}

	._container li {
		height: 36px;
		line-height: 36px;
		font-size: 18px;
		color: rgb(37, 27, 27);
        text-align: center;
        overflow:hidden;
        text-overflow:ellipsis;
        white-space:nowrap; 
	}

	._container li:first-child {
		margin-top: 0;
		transition: margin-top 1s;
	}

    .margin-top-card{
        margin-top: 100px;
        /* display: flex;
        justify-content:center;
        align-items: center; */
        
    }
    .btn-index {
    background-color: #ffb71b;
    border-radius: 25px;
    width: 90%;
    padding: 4px 12px;
    
    }

    .btn-index:hover {
    font-weight: bolder;
    background-color: #ffffff;
    color: #ffb71b;
    font-weight: bolder;
    border: 3px #ffb71b solid;
    transition: all 0.3s;
  
    }

    .row{
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        height: 70vh;
    }

    @media screen and (max-width: 992px) {
        .row {
            height:auto;
            margin-bottom:230px;
        }

    }

    @media screen and (max-width: 750px) {
        .row {
            
            margin-bottom:150px;
        }

    }

    @media screen and (max-width: 578px) {
        .row {
            height:auto;
            margin:50px 20px 50px;
        }

    }

  


    .card{
        border:#ffb71b 4px solid;
        border-radius: 1rem;
        padding:0 !important;
        overflow: hidden;
        margin:20px 0 20px;
        }

    .card-img-top{
        width: 100%;
    }
    

    .card-body2{
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem;
        text-align: center;
        
    }

    .card-title{
        font-size: 1.2rem;
        font-weight:bold;
    }

    </style>
</head>

<body>
    <div class="max-width-container">
    <!-- header -->
        <?php require "incHeader.php"; ?>
     
    <!-- Modal -->
        <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
        >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                    >
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">...</div>
                <div class="modal-footer">
                    <button
                    type="button"
                    class="btn btn-secondary"
                    data-dismiss="modal"
                    >
                    Close
                    </button>
                    <button type="button" class="btn btn-info">Save changes</button>
                </div>
                </div>
            </div>
        </div>

        <div class="container margin-top-card">
        <div class="row">
            <div class="card col-lg-3 col-sm-6">
                <img
                    class="card-img-top"
                    src="images/activity.png"
                    alt="Card image cap"
                />
                <div class="card-body2">
                    <h5 class="card-title">課程行事曆</h5>
                    <p class="card-text">
                        立即掌握相關課程 
                    </p>
                    <a href="<? echo _BASEURL."activity"; ?>" class="btn btn-index mt-3">立即前往</a>
                </div>
            </div>

            <div class="card col-lg-3 col-sm-6">
                <img
                    class="card-img-top"
                    src="images/video.png"
                    alt="Card image cap"
                />
                <div class="card-body2">
                    <h5 class="card-title">活動及課程影片</h5>
                    <p class="card-text">
                    精彩記錄無限觀看
                    </p>
                    <a href="<? echo _BASEURL."film"; ?>" class="btn btn-index mt-3">立即前往</a>
                </div>
            </div>

            <div class="card col-lg-3 col-sm-6">
                <img
                    class="card-img-top"
                    src="images/download.png"
                    alt="Card image cap"
                />
                <div class="card-body2">
                    <h5 class="card-title">精彩簡報瀏覽</h5>
                    <p class="card-text">
                    影片搭配簡報學習不間斷
                    </p>
                    <a href="<? echo _BASEURL."download"; ?>" class="btn btn-index mt-3">立即前往</a>
                </div>
            </div>
            <!-- <div class="card col-lg-3 col-sm-6">
            <img
                class="card-img-top"
                src="https://placeimg.com/480/240/arch/grayscale"
            />
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                Some quick example text to build on the card title and make up the
                bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div> -->
        </div>
        </div>

    <!-- BS4 Javascript libraries -->
        <!-- <script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"
        ></script>
        <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"
        ></script>
        <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"
        ></script> -->

    <!-- footer -->
        <?php require "incFooter.php"; ?>

    </div>
</body>




<!-- 漢堡選單 -->
<script>
$(document).ready(() => {
    $(".hamBar").click(function() {
        //避免 a 標籤會觸發
        event.preventDefault();
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

<!-- 輪播消息 -->
<script type="text/javascript">
	/*启动方式*/
	/*
	 * demo 父容器(ul)的
	 * _h 子元素li的高度
	 * interval  滚动间隔时间
	 * transition轮播动画时间
	 */
	function Scroll() {}
	Scroll.prototype.upScroll = function (dom, _h, interval) {
		var dom = document.getElementById(dom);
		var _heigth = "-" + _h + 'px'
		var _field = dom.firstElementChild;
		_field.style.marginTop = _heigth;
		setInterval(function () {
			var _field = dom.firstElementChild;
			_field.style.marginTop = "0px";
			dom.appendChild(_field);
			var _field = dom.firstElementChild
			_field.style.marginTop = _heigth;
		}, interval)
	}
	var myScroll = new Scroll();
	myScroll.upScroll("demo", 36, 5000);
</script>
<script type="text/javascript">
	/*启动方式*/
	/*
	 * demo 父容器(ul)的
	 * _h 子元素li的高度
	 * interval  滚动间隔时间
	 * transition轮播动画时间
	 */
	function Scroll() {}
	Scroll.prototype.upScroll = function (dom, _h, interval) {
		var dom = document.getElementById(dom);
		var _heigth = "-" + _h + 'px'
		var _field = dom.firstElementChild;
		_field.style.marginTop = _heigth;
		setInterval(function () {
			var _field = dom.firstElementChild;
			_field.style.marginTop = "0px";
			dom.appendChild(_field);
			var _field = dom.firstElementChild
			_field.style.marginTop = _heigth;
		}, interval)
	}
	var myScroll = new Scroll();
	myScroll.upScroll("demo2", 36, 5000);
</script>

</html>