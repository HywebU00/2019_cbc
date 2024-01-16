<!doctype html>
<html lang="zh-Hant" class="no-js">
<head>
  <meta name="robots" content="noindex">
  <!-- 使用 noindex 禁止 Google 搜尋建立索引，套版時請工程師刪掉這行 -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>歡迎來到中央銀行全球資訊網</title>
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries [if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  <!-- slick css-->
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.css" />
  <!-- cbc css -->
  <link rel="stylesheet" href="css/cbc.css" id="cssStyle">
</head>

<body>
  <!-- 直接跳主內容區 -->
  <a class="goCenter" href="#center" tabindex="1">按Enter到主內容區</a>
  <!-- wrapper Start -->
  <div class="wrapper">
    <!-- header Start -->
    <?php require_once('include/header.html'); ?>
    <!-- header End -->
    <!-- main Start -->
    <div id="center" class="main innerpage">
      <!-- 內頁新增一個classname-->
      <a class="accesskey" href="#aC" id="aC" accesskey="C" title="主要內容區">:::</a>
      <div class="container">
        <!-- breadcrumb路徑 -->
        <?php require_once('include/breadcrumb.html'); ?>
        <!-- h2節點 -->
        <h2 class="title">專業甄審線上報名</h2>
        <!-- function功能區塊 -->
        <div class="function_panel">
          <!-- 文字大小 -->
          <div class="font_size">
            <ul>
              <li><a href="#" class="small">小</a></li>
              <li><a href="#" class="medium">中</a></li>
              <li><a href="#" class="large">大</a></li>
            </ul>
          </div>
          <!-- function功能區塊 -->
          <div class="function">
            <ul>
              <li class="back"><a href="javascript:history.back()">回上一頁</a></li>
              <li class="print"><a href="#">友善列印</a></li>
              <!-- <li class="forward"><a href="#">轉寄友人</a></li> -->
            </ul>
          </div>
          <!-- 社群分享 -->
          <div class="share">
            <ul>
              <li><a href="#" class="facebook"></a></li>
              <li><a href="#" class="google"></a></li>
              <li><a href="#" class="line"></a></li>
              <li><a href="#" class="twitter"></a></li>
            </ul>
          </div>
        </div>
        <!-- LP Start -->
        <section class="lp apply">
          <div class="table_list">
            <table summary="專業甄審線上報名">
              <thead>
                <tr>
                  <th>項次</th>
                  <th>職務名稱</th>
                  <th>報名期間</th>
                  <th>職缺說明</th>
                  <th>登錄履歷</th>
                  <th>錄取公告</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-title="項次" class="num">1</td>
                  <td data-title="職務名稱">中央銀行甄用經濟金融研究專業人員(辦事員)</td>
                  <td data-title="報名期間" class="noWrap">2023/11/01~2023/11/30</td>
                  <td data-title="職缺說明" class="center"><a href="apply_info.php" class="aInfo">職缺說明</a></td>
                  <td data-title="登錄履歷" class="center">已截止</td>
                  <td data-title="錄取公告" class="center"><a href="apply_post.php" class="aHire">錄取公告</a></td>
                </tr>
                <tr>
                  <td data-title="項次" class="num">2</td>
                  <td data-title="職務名稱">中央銀行甄用經濟金融經濟金融經濟金融經濟金融經濟金融經濟金融國庫局科員 (辦事員)</td>
                  <td data-title="報名期間" class="noWrap">2023/12/01~2023/12/20</td>
                  <td data-title="職缺說明" class="center"><a href="apply_info.php" class="aInfo">職缺說明</a></td>
                  <td data-title="登錄履歷" class="center"><a href="apply_resume1.php" class="aRegister">登錄履歷</a></td>
                  <td data-title="錄取公告" class="center"></td>
                </tr>
                <tr>
                  <td data-title="項次" class="num">3</td>
                  <td data-title="職務名稱">中央銀行甄用經濟金融會計處科員(辦事員)</td>
                  <td data-title="報名期間" class="noWrap">2023/12/01~2023/12/20</td>
                  <td data-title="職缺說明" class="center"><a href="apply_info.php" class="aInfo">職缺說明</a></td>
                  <td data-title="登錄履歷" class="center"><a href="apply_resume1.php" class="aRegister">登錄履歷</a></td>
                  <td data-title="錄取公告" class="center"></td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
        <!-- LP End -->
        <!-- Pagination -->
        <?php require_once('include/pagination.html'); ?>
      </div>
    </div>
    <!-- fatfooter Start -->
    <?php require_once('include/fatfooter.html'); ?>
    <!-- fatfooter End -->
    <!-- footer Start-->
    <?php require_once('include/footer.html'); ?>
    <!-- footer End -->
  </div>
  <a href="javascript:;" class="scrollToTop">回頁首</a>
  <?php require_once('include/js.html'); ?>
</body>

</html>