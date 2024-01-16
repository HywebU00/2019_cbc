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
        <h2 class="title">專業甄審線上報名  </h2>
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
        <!-- apply Start -->
        <section class="apply">
          <div class="flow">
            <div class="step">
              <div class="no">
                <span>1</span>
              </div>
              個資聲明
            </div>
            <div class="step">
              <div class="no">
                <span>2</span>
              </div>
              E-mail驗證
            </div>
            <div class="step">
              <div class="no">
                <span>3</span>
              </div>
              資料填寫
            </div>
            <div class="step">
              <div class="no">
                <span>4</span>
              </div>
              預覽確認
            </div>
            <div class="step active">
              <div class="no">
                <span>5</span>
              </div>
              報名成功
            </div>
          </div>
          <div class="agreement">
            <h3>報名成功</h3>
            <p>您已完成報名！</p>
            <p><em>報名序號：0003</em></p>
            <p>本行審核報名資料，報名條件合格者，先進行書面資料審查，獲入選者，以電話約請面談，另行通知參加口試，謝謝您的報名。</p>
            <p>如有任何疑問或登錄資料有誤，請電洽中央銀行電話：(02)-2357-1999。</p>
          </div>
        </section>
        <!-- apply End -->
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