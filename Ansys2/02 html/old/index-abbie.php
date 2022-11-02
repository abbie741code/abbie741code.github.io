<?
require "siteAdmin/asset/sysCore/sysConfig.php";
require "siteAdmin/asset/sysCore/function.php";

$sql="SELECT * FROM tb_sysinfo";
$sysInfo=$db->query($sql)->fetch();

$sql="SELECT * FROM tb_class WHERE c_type='video' AND c_show='y' ORDER BY c_parent ASC, c_sort DESC";
$listClass=$db->query($sql)->fetchAll();


$sql="SELECT * FROM tb_adv WHERE a_type='adv' AND a_show='y' ORDER BY a_date DESC LIMIT 1";
$adv=$db->query($sql)->fetch();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 套用font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- 引用bootstrap -->
    <link rel="stylesheet" href="/bootstrap-4.2.1-dist/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style2.css" />

    <!-- owl.carousel -->
    <link rel="stylesheet" href="/css/owl.carousel.css">
    </link>

    <link rel="stylesheet" href="/assets/owlcarousel/assets/owl.theme.default.min.css">
    </link>
    <script src="/assets/vendors/jquery.min.js"></script>
    <script src="/assets/owlcarousel/owl.carousel.min.js"></script>

    <!-- 引用slick -->
    <link rel="stylesheet" href="/slick-1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="/slick-1.8.1/slick/slick-theme.css" />
    <!-- 這行jq重複了要註解掉 -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script> -->
    <script src="/slick-1.8.1/slick/slick.js"></script>

    <base href="<? echo _BASEURL; ?>">


    <title>
        <? echo $sysInfo["s_title"]; ?>
    </title>
    <meta name="Keywords" content="<? echo $sysInfo[" s_keyword"]; ?>">
    <meta name="Description" content="<? echo $sysInfo[" s_describe"]; ?>">
</head>

<body class="index">
    <header>
        <div class="logo">
            <div class="logo-img">
                <a href="index">
                    <img alt="Ansys" src="images/logo.svg"></a>

            </div>
        </div>
        <div class="UGM-btn-wrap">
            <a href="calendar" class="btn-UGM" target="_blank">課程行事曆</a>
        </div>
        <div class="menu">
            <? if($_SESSION["memberID"]){ ?>
            <div class="name">
                <? echo $_SESSION["memberName"]; ?>
            </div>
            <a href="logout">登出</a>
            <? }else{ ?>
            <a href="login">登入</a>/
            <a href="register">註冊</a>
            <? } ?>
        </div>
    </header>
    <div class="content">
        <form action="search">
            <select name="class" id="class">
                <option value="">全部主題</option>
                <? foreach($listClass as $list){ ?>
                <option value="<? echo $list[" c_id"]; ?>">
                    <? echo $list["c_title"]; ?>
                </option>
                <? } ?>
            </select>
            <input type="text" name="keyword" id="keyword" maxlength="20" placeholder="請輸入關鍵字">
            <button type="submit" class="btn-search icon"><i class="far fa-search"></i></button>
        </form>
        <? 
	  if($adv){ 
		  
		$cover="images/noImg.png";
		if(!empty($adv["a_pic"])){
			$cover="upload/".$adv["a_pic"];
		}
		  
	  ?>
        <div class="recommend-wrap">
            <div class="recommend-catch">
                <div class="recommend-catch-word">最新活動</div>
            </div>
            <? if(!empty($adv["a_url"])){ ?>
            <a href="<? echo $adv[" a_url"]; ?>" class="recommend-ad" target="_blank"><img src="<? echo $cover; ?>"
                    alt=""></a>
            <? }else{ ?>
            <img src="<? echo $cover; ?>" alt="">
            <? } ?>
        </div>
        <? } ?>
    </div>
    <div class="SSL-mark">
        <a
            href="javascript:location.href='https://publicca.hinet.net/SSLQueryCert/SSLQueryCert.jsp?Domain_name='+document.location.hostname"><img
                src="images/SSLSeal.gif"></a>
    </div>
    <footer>
        <span>© 2021 Ansys 台灣 All rights reserved.</span>
    </footer>
</body>

</html>