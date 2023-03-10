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
        <h2 class="title">案件查詢</h2>
        <!-- function功能區塊 -->
        <div class="function_panel">
          <!-- 文字大小 -->
          <div class="font_size">
            <!-- <span>字型大小：</span> -->
            <!-- 英文用<span>font-size：</span> -->
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
          <div class="function_btn">
            <button type="button" class="btn btn-sm btn_fill">意見填寫</button>
          </div>            
        </div>
        <!-- suggestions Start -->
        <section class="suggestions">
          <div class="text_block">
            <form action="" class="form_grid">
              <p>註:<abbr class="necessary" title=“為必填(選)欄位,不能為空白。“>*</abbr>為必填(選)欄位, 不能為空白。</p>
              <div class="form_grp">
                <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>姓名：</label>
                <div class="form_content">
                  <input type="text" id="" value="" placeholder="請輸入您的姓名">
                </div>
              </div>
              <div class="form_grp">
                <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>信件編號：</label>
                <div class="form_content">
                  <input name="" id="" type="text" placeholder="請輸入您的信件編號">
                </div>
              </div>
              <div class="form_grp">
                <label class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>驗證碼：</label>
                <div class="form_content">
                  <img src="images/basic/captcha.gif" alt="" class="captcha">
                  <input type="text" id="" value="">
                  <button type="button" class="btn btn-sm btn_sound">語音播放</button>
                  <button type="button" class="btn btn-sm btn_reload">重新產生</button>
                </div>
              </div>
              <div class="btn_grp">
                <input name="Search" type="submit" value="查詢">
              </div>
            </form>
          </div>
        </section>
        <!-- suggestions End -->
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