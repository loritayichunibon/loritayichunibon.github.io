<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NewOil3.0</title>
    <!-- 頁簽顯示LOGO -->
    <link rel="shortcut icon" href="images/ico_logo.ico">
    <!-- (Bootstrap) Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Bootstrap Material Design -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    <!-- Aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- jQuery Core 3.1.0 -->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <!-- material-icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- google-fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&family=Noto+Serif+TC:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <!-- lity -->
    <link href="css/lity.min.css" rel="stylesheet">
    <!-- 自定義Css_start-->
    <!-- 定義全站html標籤、網站字體或是取消套件預設 -->
    <link rel="stylesheet" href="css/global.css">
    <!-- 定義全站中常駐項目 -->
    <link rel="stylesheet" href="css/layout.css">
    <!-- 首頁專用Css -->
    <!-- <link rel="stylesheet" href="css/index.css"> -->
    <!-- 預留可自定義Css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- 自定義Css_end-->
    <link rel="stylesheet" href="css/page.css">

</head>

<body>
    <div class="container-fluid bmd-layout-container bmd-drawer-f-l bmd-drawer-overlay pageContainer">
        <div class="headerTopMenu">
            <!-- logo/登入/註冊/詢價車/語系/搜尋_start-->
            <div class="topInfoContainer">
                <div class="topInfoContainerInner">
                    <div class="container container1320 nopadding">
                        <!-- logo -->
                        <div class="logo pcLogo">
                            <h1>
                                <a href="index.php"><img src="images/goldenSpa_logo.svg" alt=""></a>
                            </h1>
                        </div>
                    </div>
                    <div class="topInfo">
                        <div class="container-fluid nopadding">
                            <div class="container nopadding">
                                <div class="topInfoInner">
                                    <!-- 登入/註冊/詢價車/搜尋 -->
                                    <ul>
                                        <!-- <li>
                                            <a href="javascript:void(0);" class="loginBtn">
                                                登入
                                            </a>
                                        </li>
                                        <li><a href="javascript:void(0);" class="logoutBtn">登出</a></li>
                                        <li><a href="javascript:void(0);" class="registerBtn">註冊</a></li>
                                        <li><a href="javascript:void(0);" class="inquiryBtn">詢價車</a></li> -->
                                        <!-- <li class="mobileShow"><a href="search.php" class="searchBtn ">搜尋</a></li> -->
                                        <li class="webShow">
                                            <div class="topSearchContent">
                                                <form>
                                                    <div class="searchContent">
                                                        <div class="searchContentInner"><input type="text" class="form-control" placeholder="請輸入關鍵字"></div>
                                                        <div class="searchContentInner searchBlock"><button type="submit" class="searchBtn"></button></div>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 登入/註冊/詢價車/搜尋_end-->
            <!-- 主選單_start -->
            <header class="headerContent">
                <div class="container-fulid  container1320">
                    <div class="menuContainer">
                        <div class="menuContainerInner">
                            <nav>
                                <ul id="mainMenu" itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="mainNav">
                                    <li itemprop="name" id="menu01">
                                        <a itemprop="url" href="aboutUs.php">關於我們</a>
                                    </li>
                                    <li itemprop="name" id="menu05">
                                        <a itemprop="url" href="product.php">課程服務</a></a>
                                        <!-- 客製功能_start -->
                                        <ul class="dropdownMenu">
                                            <li><a href="product.php">產品目錄</a></li>
                                            <li>
                                                <a href="productList.php">NIKE</a></a>
                                            </li>
                                            <li><a href="productList.php">ADIDAS</a></li>
                                            <li><a href="productList.php">New Balance</a></li>
                                            <li><a href="productList.php">Puma</a></li>
                                            <li><a href="productList.php">Asics</a></li>
                                        </ul>
                                        <!-- 客製功能_end -->
                                    </li>
                                    <li itemprop="name" id="menu04">
                                        <a itemprop="url" href="pageCate.php">環境展示</a>
                                    </li>
                                    <!-- 客製功能_start -->
                                    <li itemprop="name" id="menu10">
                                        <a itemprop="url" href="recruit.php" class="expansion">客戶感言</a>
                                    </li>
                                    <!-- 客製功能_end -->
                                    <li itemprop="name" id="menu02">
                                        <a itemprop="url" href="newsCate.php">最新消息</a>
                                    </li>
                                    <!-- 客製功能_start -->
                                    <li itemprop="name" id="menu12">
                                        <a itemprop="url" href="contact.php">聯絡我們</a>
                                    </li>
                                    <!-- 客製功能_end -->
                                    <li itemprop="name" id="menu03">
                                        <a itemprop="url" href="javascript:void(0);" class="arrowDown">公司簡介</a>
                                        <!-- 客製功能_start -->
                                        <ul class="dropdownMenu">
                                            <li><a href="pageCate.php">公司簡介</a></li>
                                            <li><a href="pageDt.php">{關於我們}</a></li>
                                            <li><a href="pageDt.php">{核心技術}</a></li>
                                            <li><a href="pageDt.php">{企業理念}</a></li>
                                            <li><a href="pageDt.php">{歷史沿革}</a></li>
                                        </ul>
                                        <!-- 客製功能_end -->
                                    </li>
                                    <!-- 客製功能_start -->
                                    <li itemprop="name" id="menu06">
                                        <a itemprop="url" href="productList.php" class="expansion">鞋子(自定義)</a>
                                    </li>
                                    <!-- 客製功能_end -->
                                    <!-- 客製功能_start -->
                                    <li itemprop="name" id="menu07">
                                        <a itemprop="url" href="video.php" class="expansion">影音專區</a>
                                    </li>
                                    <!-- 客製功能_end -->
                                    <!-- 客製功能_start -->
                                    <li itemprop="name" id="menu08">
                                        <a itemprop="url" href="download.php" class="expansion">下載專區</a>
                                    </li>
                                    <!-- 客製功能_end -->
                                    <!-- 客製功能_start -->
                                    <li itemprop="name" id="menu09">
                                        <a itemprop="url" href="catelog.php" class="expansion">型錄瀏覽</a>
                                    </li>
                                    <!-- 客製功能_end -->
                                    <!-- 客製功能_start -->
                                    <li itemprop="name" id="menu11">
                                        <a itemprop="url" href="faq.php">常見問題</a>
                                    </li>
                                    <!-- 客製功能_end -->
                                    <!-- 客製功能_start -->
                                    <li itemprop="name" id="menu13">
                                        <a itemprop="url" href="javascript:void(0);" class="arrowDown">語系</a>
                                        <ul class="dropdownMenu">
                                            <li><a href="javascript:void(0);">英文版</a></li>
                                            <li><a href="javascript:void(0);">中文版</a></li>
                                            <li><a href="javascript:void(0);">簡中版</a></li>
                                            <li><a href="javascript:void(0);">日文版</a></li>
                                        </ul>
                                    </li>
                                    <!-- 客製功能_end -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!-- 主選單_end -->
        </div>
        <!-- 手機選單_start -->
        <header class="bmd-layout-header mbHeadContainer animate">
            <div class="bg-faded">
                <div class="mbHeadContainerInner">
                    <div class="logo mbLogo">
                        <a href="index.php"><img src="images/goldenSpa_logo.svg" alt=""></a>
                    </div>
                    <div class="mbMenuBtn">
                        <button class="navbar-toggler" type="button" data-toggle="drawer" data-target="#dw-s2">
                            <span class="mbMenuBar"></span>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <div id="dw-s2" class="bmd-layout-drawer bg-faded mbMenu">
            <div id="leftMenu">
                <div class="mbClose">
                    <button type="button" class="mbCloseBtn"><span class="material-icons">close</span></button>
                </div>
                <div id="mbSearch">
                    <form>
                        <div class='searchContent'>
                            <div class='searchContentInner'><input type='text' class='form-control' placeholder='請輸入關鍵字'></div>
                            <div class='searchContentInner searchBlock'><button type='submit' class='searchBtn'></button></div>
                        </div>
                    </form>
                </div>
                <ul class="nav sb-menu nav-list"></ul>
            </div>
        </div>
        <!-- 手機選單_end -->