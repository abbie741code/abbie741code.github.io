<?
require "siteAdmin/asset/sysCore/sysConfig.php";
require "siteAdmin/asset/sysCore/function.php";

$sql="SELECT * FROM tb_sysinfo";
$sysInfo=$db->query($sql)->fetch();

if(!$_SESSION["memberLogin"]){
	$_SESSION["redirect"]="download";
	$flashMsg->error("<i class='fas fa-exclamation-circle fa-lg'></i> 請先登入會員!", "login", true);
}

$queryPara=array();
$sql="SELECT * FROM tb_post WHERE p_type='download' AND p_show='y' ";
if(!empty($_GET["year"])){
	$sql.=" AND YEAR(p_date)=:year ";
	$queryPara[":year"]=$_GET["year"];
	
	if(!empty($_GET["month"])){
		$sql.=" AND MONTH(p_date)=:month ";
		$queryPara[":month"]=$_GET["month"];
	}
}
if(!empty($_GET["keyword"])){
	$sql.=" AND (p_title LIKE :keyword OR p_content LIKE :keyword) ";
	$queryPara[":keyword"]="%".$_GET["keyword"]."%";
}
$sql.=" ORDER BY p_date DESC ";

$rsList=$db->query(
	$sql.$sqlLimit,$queryPara
)->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<base href="<? echo _BASEURL; ?>">	

    <!-- 11/1 -->
   <!-- 表格欄位先決 start-->
   <link rel="stylesheet" href="css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="css/responsive.dataTables.min.css" />
    <!-- 表格欄位先決 end-->

    <!-- 表格RWD start-->
    <link rel="stylesheet" href="css/dcf-responsive-table.css" />
    <!-- 表格RWD end-->



<!-- 套用font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
	integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
	crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- 引用favicon -->
<link rel="shortcut icon" href="images/favicon.ico">
<title><? echo $sysInfo["s_title"]; ?></title>
<meta name="Keywords" content="<? echo $sysInfo["s_keyword"]; ?>">
<meta name="Description" content="<? echo $sysInfo["s_describe"]; ?>">


<!-- 縮圖照片 -->
<meta property="og:image" content="https://www.ansys.com.tw/video/images/a-logo.png" />
<!-- 引用bootstrap -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"
	integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style2.css">


<style>
    * {
        /* outline: 1px solid rgb(221, 144, 144); */
      }

      .outline {
        border: 1px solid #ffb71b;
      }

      thead,
      th,
      td,
      tr {
        border: 1px solid #ffb71b!important;  
        padding: 10px;
      }
      
      thead{
        background-color: #f4ba4669;
        font-size: 1.2rem;
        text-align: left;
      }

      .underline {
        text-decoration: underline;
      }

      /* .white-space{
        white-space: nowrap !important;
      } */

      .page-line{
        width: 100%;
        height: 3px;
        background-color: #ffb71b;
        margin-bottom:64px ;
      }

      

    
      
</style>
</head>

<body class="otherPage body">
    <?php require "incHeader.php"; ?>

    <!-- 內文 -->
    <div class="content-container">
      <div class="content-wrap">
        <div class="title margin">
          <span>簡報下載</span>
        </div>

        <div class="page-line"></div>

        <!-- search bar -->
        <form action="">
          <p class="">請選擇主題</p>

          

        <select name="month">
            <option value="">R1</option>
            <option value="">R2</option>
            <option value="">用戶技術大會</option> 
            <option value="">車用</option>
            <option value="">IC設計</option>
            <option value="">其他類別</option>
        </select>

         
        </form>

        <!-- 簡報表格區 -->
        <table id="example" class="display outline" style="width: 100%">
          <thead>
            <tr>
              <th scope="col" data-label="類型">上傳日期</th>
              <th scope="col" data-label="內容說明">標題</th>
              <th scope="col" data-label="分享者">下載</th>
              <th scope="col" data-label="發文日期">影片</th>
            </tr>
          </thead>

          <tbody>
            <tr style="cursor: pointer">
              <td data-label="類型">2022/10/28</td>
              <td data-label="內容說明" class="underline">
                <a target="_blank" href="#">
                  2022 Ansys 用戶技術大會：國立成功大學 謝旻甫|
                  以旋轉永久磁鐵磁極方向進行調磁之車用永磁同步馬達
                  以旋轉永久磁鐵磁極方向進行調磁之車用永磁同步馬達
                </a>
              </td>
              
              <td data-label="分享者" class="underline">
                <div>下載簡報 <i class="fa-regular fa-circle-down"></i></div>
              </td>
              <td data-label="發文日期" class="underline">
                <a target="_blank" href="#">相關影片 </a>
              </td>
            </tr>

            <tr style="cursor: pointer">
              <td data-label="類型">2022/10/28</td>
              <td data-label="內容說明" class="underline">
                <a target="_blank" href="#">
                  2022 Ansys 用戶技術大會：國立成功大學 謝旻甫|
                  以旋轉永久磁鐵磁極方向進行調磁之車用永磁同步馬達
                </a>
              </td>
              <td data-label="分享者" class="underline">
                <div>下載簡報 <i class="fa-regular fa-circle-down"></i></div>
              </td>
              <td data-label="發文日期" class="underline">
                <a target="_blank" href="#">相關影片 </a>
              </td>
            </tr>

            <tr style="cursor: pointer">
              <td data-label="類型">2022/10/28</td>
              <td data-label="內容說明" class="underline">
                <a target="_blank" href="#">
                  2022 Ansys 用戶技術大會：國立成功大學 謝旻甫|
                  以旋轉永久磁鐵磁極方向進行調磁之車用永磁同步馬達
                </a>
              </td>
              <td data-label="分享者" class="underline">
                <div>下載簡報 <i class="fa-regular fa-circle-down"></i></div>
              </td>
              <td data-label="發文日期" class="underline">
                <a target="_blank" href="#">相關影片 </a>
              </td>
            </tr>

            <tr style="cursor: pointer">
              <td data-label="類型">2022/10/28</td>
              <td data-label="內容說明" class="underline">
                <a target="_blank" href="#">
                  2022 Ansys 用戶技術大會：國立成功大學 謝旻甫|
                  以旋轉永久磁鐵磁極方向進行調磁之車用永磁同步馬達
                </a>
              </td>
              <td data-label="分享者" class="underline">
                <div>下載簡報 <i class="fa-regular fa-circle-down"></i></div>
              </td>
              <td data-label="發文日期" class="underline">
                <a target="_blank" href="#">相關影片 </a>
              </td>
            </tr>

            <tr style="cursor: pointer">
              <td data-label="類型">2022/10/28</td>
              <td data-label="內容說明" class="underline">
                <a target="_blank" href="#">
                  2022 Ansys 用戶技術大會：國立成功大學 謝旻甫|
                  以旋轉永久磁鐵磁極方向進行調磁之車用永磁同步馬達
                </a>
              </td>
              <td data-label="分享者" class="underline">
                <div>下載簡報 <i class="fa-regular fa-circle-down"></i></div>
              </td>
              <td data-label="發文日期" class="underline">
                <a target="_blank" href="#">相關影片 </a>
              </td>
            </tr>

            <tr style="cursor: pointer">
              <td data-label="類型">2022/10/28</td>
              <td data-label="內容說明" class="underline">
                <a target="_blank" href="#">
                  2022 Ansys 用戶技術大會：國立成功大學 謝旻甫|
                  以旋轉永久磁鐵磁極方向進行調磁之車用永磁同步馬達
                </a>
              </td>
              <td data-label="分享者" class="underline">
                <div>下載簡報 <i class="fa-regular fa-circle-down"></i></div>
              </td>
              <td data-label="發文日期" class="underline">
                <a target="_blank" href="#">相關影片 </a>
              </td>
            </tr>

            <tr style="cursor: pointer">
              <td data-label="類型">2022/10/28</td>
              <td data-label="內容說明" class="underline">
                <a target="_blank" href="#">
                  2022 Ansys 用戶技術大會：國立成功大學 謝旻甫|
                  以旋轉永久磁鐵磁極方向進行調磁之車用永磁同步馬達
                </a>
              </td>
              <td data-label="分享者" class="underline">
                <div>下載簡報 <i class="fa-regular fa-circle-down"></i></div>
              </td>
              <td data-label="發文日期" class="underline">
                <a target="_blank" href="#">相關影片 </a>
              </td>
            </tr>

            <tr style="cursor: pointer">
              <td data-label="類型">2022/10/28</td>
              <td data-label="內容說明" class="underline">
                <a target="_blank" href="#">
                  2022 Ansys 用戶技術大會：國立成功大學 謝旻甫|
                  以旋轉永久磁鐵磁極方向進行調磁之車用永磁同步馬達
                </a>
              </td>
              <td data-label="分享者" class="underline">
                <div>下載簡報 <i class="fa-regular fa-circle-down"></i></div>
              </td>
              <td data-label="發文日期" class="underline">
                <a target="_blank" href="#">相關影片 </a>
              </td>
            </tr>

            <tr style="cursor: pointer">
              <td data-label="類型">2022/10/28</td>
              <td data-label="內容說明" class="underline">
                <a target="_blank" href="#">
                  2022 Ansys 用戶技術大會：國立成功大學 謝旻甫|
                  以旋轉永久磁鐵磁極方向進行調磁之車用永磁同步馬達
                </a>
              </td>
              <td data-label="分享者" class="underline">
                <div>下載簡報 <i class="fa-regular fa-circle-down"></i></div>
              </td>
              <td data-label="發文日期" class="underline">
                <a target="_blank" href="#">相關影片 </a>
              </td>
            </tr>

            <tr style="cursor: pointer">
              <td data-label="類型">2022/10/28</td>
              <td data-label="內容說明" class="underline">
                <a target="_blank" href="#">
                  2022 Ansys 用戶技術大會：國立成功大學 謝旻甫|
                  以旋轉永久磁鐵磁極方向進行調磁之車用永磁同步馬達
                </a>
              </td>
              <td data-label="分享者" class="underline">
                <div>下載簡報 <i class="fa-regular fa-circle-down"></i></div>
              </td>
              <td data-label="發文日期" class="underline">
                <a target="_blank" href="#">相關影片 </a>
              </td>
            </tr>

            <tr style="cursor: pointer">
              <td data-label="類型">2022/10/28</td>
              <td data-label="內容說明" class="underline">
                <a target="_blank" href="#">
                  2022 Ansys 用戶技術大會：國立成功大學 謝旻甫|
                  以旋轉永久磁鐵磁極方向進行調磁之車用永磁同步馬達
                </a>
              </td>
              <td data-label="分享者" class="underline">
                <div>下載簡報 <i class="fa-regular fa-circle-down"></i></div>
              </td>
              <td data-label="發文日期" class="underline">
                <a target="_blank" href="#">相關影片 </a>
              </td>
            </tr>

            <tr style="cursor: pointer">
              <td data-label="類型">2022/10/30</td>
              <td data-label="內容說明" class="underline">
                <a target="_blank" href="#">
                  2022 Ansys 用戶技術大會：國立成功大學 謝旻甫|
                  以旋轉永久磁鐵磁極方向進行調磁之車用永磁同步馬達
                </a>
              </td>
              <td data-label="分享者" class="underline">
                <div>下載簡報 <i class="fa-regular fa-circle-down"></i></div>
              </td>
              <td data-label="發文日期" class="underline">
                <a target="_blank" href="#">相關影片 </a>
              </td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>



    <!-- footer -->
    <?php require "incFooter.php"; ?>





</body>

<!-- 引用google host JQ CDN-->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

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
$("input[type='checkbox']").click(function() {
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

 <!---11/1---->
	<!-- 表格欄位先決 -->	
	<script src="js/jquery-3.6.0.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.responsive.min.js"></script>

  <!-- 裁切字 -->
	<script>
		//限制欄位的內容字數, 剩下用...代替(需搭配下方的function)
		$.fn.dataTable.render.ellipsis = function () {
    return function ( data, type, row ) {
        return type === 'display' && data.length > 120 ?
            data.substr( 0, 120 ) +'…' :
            data;
				}
		};
	</script>
	
	<!-- 分頁 -->
	<script>
		$(document).ready(function () {
			$('#example').DataTable({
				// "paging": false,
				// "ordering": false, 
				"order": [[ 3, "asc" ]],//指定想要優先排序的欄位, 若無則false
				"info": false,
				"searching": false,
				"lengthChange": false,
				"pageLength":10,
				"language": {
					"paginate": {
						"previous": "&lt;",
						"next": "&gt;"
					}
				},
				columnDefs: [ 
					{
						targets: 1,//要做用在第幾欄
						render: $.fn.dataTable.render.ellipsis(20)
						//搭配上面的function
					}
				],
				responsive: {
					details: {
						display: $.fn.dataTable.Responsive.display.childRowImmediate,
						type: 'none',
						target: ''
					}
				}
			});
		});
	</script>

</html>