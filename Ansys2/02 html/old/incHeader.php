<header>
    <div class="header-inner">
        <div class="header-inner-left">
            <div class="logo-img">
                <a href="index.html"><img src="images/logo-03.png" /></a>
                <a href="index.html"><img src="images/logo-02.png" /></a>
            </div>
            <div class="search-wrap">
                <input type="text" placeholder="Search.." />
                <span class="icon"><i class="fa-solid fa-magnifying-glass"></i></span>
            </div>
        </div>


        <ul class="header__nav">
            <!-- 下拉式選單中的註冊與登入按鈕  -->
            <li class="nav__item phone-btn">
                <div class="header-btn phone-btn">
                    <a class="mr-2 register-btn" href="0-2-register.html">註冊</a>
                    <a class="login-btn" href="0-1-login.html">登入</a>
            </li>
            <li class="nav__item"><a href="5-1-calendar.html" title="1">課程行事曆</a></li>
            <li class="nav__item"><a href="1-1-LatestActivity.html" title="2">最新活動</a></li>
            <li class="nav__item"><a href="2-1-film.html" title="3">觀看影片</a></li>
            <li class="nav__item"><a href="3-1-download.html" title="4">資源下載</a></li>
            <li class="nav__item"><a href="4-1-LatestNews.html" title="5">最新消息</a></li>
            <!-- 下拉式選單中的search bar  -->
            <li class="nav__item">
                <div class="search-wrap-phone">
                    <div>
                        <input type="text" placeholder="Search.." />
                    </div>
                    <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                </div>
        </ul>

        <div class="header-inner-right">
            <div class="header-btn">
                <a class="register-btn" href="0-2-register.html">註冊</a>
                <a class="login-btn" href="0-1-login.html">登入</a>
            </div>

            <div class="link-left ml-4">
                <div class="yellow-line "></div>
                <div class="ml-2 user-btn">
                    <? echo $_SESSION["memberName"]; ?>
                </div>
                <a class="ml-2 logout-btn" href="index.html">登出 </a>
            </div>
        </div>

        <a class="hamBar" href="#"><i class="fas fa-bars"></i></a>
    </div>
    <div class="deco-arrow adjust-bottom"></div>
</header>