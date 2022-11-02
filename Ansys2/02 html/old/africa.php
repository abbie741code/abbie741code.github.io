<?
require "siteAdmin/asset/sysConfig.php";
require "siteAdmin/asset/function.php";

$sql="SELECT * FROM tb_sysinfo";
$rsSysInfo=$database->query($sql);
$sysInfo=$rsSysInfo->fetch();


$sql="SELECT * FROM tb_adv WHERE a_show='y' AND a_position='africa' ORDER BY a_sort ASC";
$rsBanner=$database->query($sql);

?>
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>非洲行動-<? echo $sysInfo["s_title"]; ?></title>
<meta name="Keywords" content="<? echo $sysInfo["s_keyword"]; ?>">
<meta name="Description" content="60多年前，挪威籍畢嘉士醫生來到當時世界的偏鄉：台灣，以醫療專業服務台灣弱勢30年。在台灣已經自立、有能力關懷他人的今天，畢嘉士基金會也擔負起將這份來自挪威的關愛，送往其他世界偏鄉的任務，而將關懷的觸角自台灣延伸至非洲馬拉威。 距離台灣10303公里的非洲馬拉威，有人說，就像六十年前的台灣，基礎建設和經濟發展正逐漸起步，彷彿希望的國度。台灣早期曾派遣醫療團和農技團等，為馬拉威的發展提供了專業知識與援助，也為當地社區發展工作奠定基礎。">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<meta property="og:title" content="非洲行動-<? echo $sysInfo["s_title"]; ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<? echo urlPath().basename($_SERVER["SCRIPT_FILENAME"]); ?>" />
<meta property="og:description" content="60多年前，挪威籍畢嘉士醫生來到當時世界的偏鄉：台灣，以醫療專業服務台灣弱勢30年。在台灣已經自立、有能力關懷他人的今天，畢嘉士基金會也擔負起將這份來自挪威的關愛，送往其他世界偏鄉的任務，而將關懷的觸角自台灣延伸至非洲馬拉威。 距離台灣10303公里的非洲馬拉威，有人說，就像六十年前的台灣，基礎建設和經濟發展正逐漸起步，彷彿希望的國度。台灣早期曾派遣醫療團和農技團等，為馬拉威的發展提供了專業知識與援助，也為當地社區發展工作奠定基礎。" />
<meta property="og:image" content="<? echo urlPath()."upload/main_adv/f_20170707181501.jpg";?>" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<link href="css/page_style.css" rel="stylesheet" type="text/css">
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/taiwan_style.css" rel="stylesheet" type="text/css">
<!--手機選單-->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/mbMenu.js"></script>
<link rel="stylesheet" type="text/css" href="css/mobile_menu.css">
<!--選單-->
<link href="css/menu_style1.css" rel="stylesheet">
<!--fb share-->
<div id="fb-root"></div>
<script>
  ( function ( d, s, id ) {
      var js, fjs = d.getElementsByTagName( s )[ 0 ];
      if ( d.getElementById( id ) ) return;
      js = d.createElement( s );
      js.id = id;
      js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.9";
      fjs.parentNode.insertBefore( js, fjs );
  }( document, 'script', 'facebook-jssdk' ) );
</script>
    <!--banner圖片輪播-->
<link rel="stylesheet" href="assets/owl.carousel.min.css" />
<link rel="stylesheet" href="assets/owl.theme.default.min.css" />
<link rel="stylesheet" href="css/pic_style.css" />
<script src="js/owl.carousel.js" data-cover></script>
<script>
  $(document).ready(function(e) {
      $('.owl-carousel').owlCarousel({
		mouseDrag: false,
		touchDrag: false,
		loop:true,
		items:1,
		margin:10,
		dots:false,
		nav:false,
		autoplay:false,
		navText: ["<img src='images/prev.png'>","<img src='images/next.png'>"]
      })
  });
  
  </script>
<? include "incFBcode.php"; ?>
</head>

<body>
	<div class="wrapper">
	  <?php include "n_menu.php";?>
		<div class="mainbg">
			<div id="home_link"><a href="index.php">首頁</a>><a href="africa.php">非洲行動</a>
			</div>
			<div class="title"> 非洲行動
				<div class="titlen_m">Our Work in Africa</div>
				<div class="title_line"></div>
			</div>
			<div class="both"></div>
			<div id="mainarea">
				<div class="taiwan_pic">
		    	<div class="owl-carousel owl-theme">
					<? 
                    while($banner=$rsBanner->fetch()){ 
                        $linkHead="";
                        $linkEnd="";
                        if(!empty($banner["a_link"])){
                            $linkHead="<a href='".$banner["a_link"]."' target='_blank'>";
                            $linkEnd="</a>";
                        }
                    ?>
					<div class="item"><? echo $linkHead; ?><img src="<? echo "upload/main_adv/".$banner["a_pic"];?>"><? echo $linkEnd; ?></div>
                    <?
					}
					?>
				</div>
			    </div>
				<div class="taiwan_box">
					<h1>畢嘉士在馬拉威</h1>
					<h2>60多年前，挪威籍畢嘉士醫生來到當時世界的偏鄉：台灣，以醫療專業服務台灣弱勢30年。在台灣已經自立、有能力關懷他人的今天，畢嘉士基金會也擔負起將這份來自挪威的關愛，送往其他世界偏鄉的任務，而將關懷的觸角自台灣延伸至非洲馬拉威。
距離台灣10303公里的非洲馬拉威，有人說，就像六十年前的台灣，基礎建設和經濟發展正逐漸起步，彷彿希望的國度。台灣早期曾派遣醫療團和農技團等，為馬拉威的發展提供了專業知識與援助，也為當地社區發展工作奠定基礎。</h2>
					<div class="taiwan_box_pic"><img src="images/africa/pic1.jpg">
					</div>
					<h2>在前台灣醫療團「屏東基督教醫院」的服務基礎上，畢嘉士基金會接棒馬拉威的社區發展工作，深入北部姆祖祖市(Mzuzu)，與當地國際組織並肩合作，培力當地人一起努力從事教育與社區發展工作。</h2>
				  <div class="taiwan_box_pic"><img src="images/africa/pic2.jpg">
				  </div>
				  <div class="taiwan_box_picm"><img src="images/africa/pic10.jpg">
				  </div>
					<div class="both"></div>
				  <h1>馬拉威的挑戰：貧窮循環</h1>
					<h2>馬拉威是世界最貧窮的國家之一，85%人口住在未發展的農村，以農業維生，但糧食作物僅得勉強餬口，菸草、甘蔗、茶、咖啡等主要經濟作物則面臨大盤剝削，以致70%馬拉威人仍生活在貧窮線以下，每天生活費不到2美元。對多數馬拉威人而言，貧窮像是一個世代無限循環、不可能有出路的迷宮。</h2>
					<h2>因為貧窮，馬拉威基礎建設不足，居家環境更是簡陋。每 3 人中就有 1 人沒有乾淨水源，在學校則平均超過100個孩子共用一間廁所，導致容易感染痢疾、霍亂等疾病。一旦生病卻無力負擔醫藥費，五歲以下小孩容易夭折，青少年往往中斷學業，成人則可能因為失去勞動力，頓時讓原本就已貧窮的家庭陷入急難。</h2>
				  <h2>和台灣人一樣，馬拉威人也把希望放在下一代，希望透過「教育」脫貧。但因為無力負擔學雜費，以及制服、書本等上學隱形成本，小學輟學率高達51%，孩子在起跑線就失去學習知識和未來就業技能的機會；更因為重男輕女觀念，最先被犧牲的多是女孩子，只能留在家裡幫忙或早早結婚。漫漫上學路走不完，脫貧也遙遙無期。</h2>
					<div class="taiwan_box_pic"><img src="images/africa/pic3.jpg">
					</div>
					<div class="sn_iconl"><img src="images/icon.jpg" ></div>
          <div class="sn_slogan">多數馬拉威人的人生似乎就是以貧窮做為起點，在通往「失學」和「疾病」後一無所剩，只能走在失業的漫漫長路，又回到貧窮。然後，下一代繼續接棒，走上貧窮的道路。</div>
          <div class="sn_iconr"><img src="images/icon1.jpg" ></div>
          <div class="both" style="height: 70px;"></div>
				  <h1>用培力與合作，推動教育、健康和經濟發展工作</h1>
					<h2>畢嘉士的工作從來不是慈善性的給予，而是選擇走進社區和居民席地而坐，共同討論現況需求和發展願景，再整合社工、社區發展、公共衛生等多元專業，培力居民長出能力「自己幫助自己」，從失學、疾病、失業的困境中找出活路，終止貧窮的惡性循環。 </h2>
					<h2>以馬拉威的需要出發，畢嘉士為在地社區發展工作訂定出三大重點面向：教育支持、健康保障和經濟培力，並以<a href="http://www.undp.org/content/undp/en/home/sustainable-development-goals.html" target="new">聯合國17項永續發展目標(Sustainable Development Goals, SDGs)</a>為參考指標，逐一發展出多項服務方案。在服務方案執行上，畢嘉士基金會與多個夥伴組織合作，捲動更多國際資源和在地經驗，確保每一個方案順利推展，馬拉威就多一個改變貧窮生命的機會！</h2>
					<div class="taiwan_box_pic1"><img src="images/africa/pic4.jpg"></div>
					<div class="taiwan_box_picm"><img src="images/africa/pic9.jpg"></div>
					<div class="a_slogan_box">
					<div class="a_iconl"><img src="images/icon.jpg" ></div>
          <div class="a_slogan">畢嘉士在馬拉威的社區發展工作，考量在地需要和符合國際趨勢，執行上有國際資源，更強調在地經驗。</div>
          <div class="a_iconr"><img src="images/icon1.jpg" ></div>
          <div class="both"></div>
          </div>
          <div class="both"></div>
				  <div class="title">
						<div class="titlen">三大項目</div>
						<div class="title_line"></div>
					</div>
					 <div class="both"></div>
					<div class="taiwan_box_service">
					   <ul>
					     <li><a href="a_service1.php">
									<div id="my-mask" class="mask-wrapper"><img src="images/africa/pic5.jpg" >
										<div class="mask-inner"> </div>
									</div>
								</a><h1>教育</h1></li>
					     <li><a href="a_service2.php">
									<div id="my-mask" class="mask-wrapper"><img src="images/africa/pic6.jpg" >
										<div class="mask-inner"> </div>
									</div>
								</a><h1>健康</h1></li>
					     <li><a href="a_service3.php">
									<div id="my-mask" class="mask-wrapper"><img src="images/africa/pic7.jpg" >
										<div class="mask-inner"> </div>
									</div>
								</a><h1>經濟</h1></li>
					   </ul>
					   <div class="both"></div>
					</div>
				  <div class="title">
						<div class="titlen_m">公益商品</div>
						<div class="title_line"></div>
					</div>
				  <div class="t_serivcearea">
						<ul>
							<li>
								<div class="t_pic"><img src="images/africa/pic8.jpg">
								</div>
								<div class="t_title">馬拉威小農支持計畫</div>
								<div class="t_info">在馬拉威，咖啡、茶葉等農作是許多家庭賴以為生的經濟來源。然而，弱勢的小農在面對國際價格波動或盤商層層剝削，卻完全沒有招架之力，辛勞大半年卻換來入不敷出的生活。有鑒於此，畢嘉士與當地小農合作社以公平合理的價格採購咖啡和茶葉，不只保障小農家庭收入，進口至台灣的銷售利潤更回饋挹注馬拉威社區發展工作。
								<ul>
								  <li><i>■</i>2013年 啟動馬拉威小農支持計畫</li>
								  <li><i>■</i>2014年 採購小農咖啡在台上市</li>
								  <li><i>■</i>2017年 採購小農茶葉在台上市</li>
								</ul>
								</div>
								<div class="t_info">
									<a href="fair.php">
										<div class="donation_button">前往購買</div>
									</a>
								</div>
								<div class="both"></div>
							</li>
						</ul>
				  </div>
				</div>
				<div class="both"></div>
			</div>
		</div>
		<div class="both"></div>
		<?php include "footer.php";?>
	</div>
	<?php include "stop.php";?>
</body>

</html>