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
            <div class="step active">
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
            <div class="step">
              <div class="no">
                <span>5</span>
              </div>
              報名成功
            </div>
          </div>
          <div class="agreement">
            <h3>E-mail驗證注意事項</h3>
            <p>為確保您的電子信箱未遭他人冒用，請填妥E-mail並點選發送驗證碼，<em>系統會自動發送一封「驗證碼通知」到您填的電子信箱</em>，請立即前往收取通知信，開啟並將通知信中提供的Email驗證碼回填至下方欄位，<em>驗證碼的有效時間為10分鐘</em>，請儘速回填以完成驗證程序。<em>若超過有效期間請重新發送驗證碼</em>。</p>
            <p>請注意：<em>Yahoo、Hotmail、PChome等免費信箱可能將本行發出確認信誤認為廣告信件，請避免使用，若您未收到確認信，請至您的「垃圾郵件匣」查看，並將信件設定為安全名單</em>，以免收不到確認信件。</p>
          </div>
          <div class="applyForm">
            <form action="" class="form_grid">
              <p>註:<abbr class="necessary" title="“為必填(選)欄位,不能為空白。“">必填</abbr>為必填(選)欄位, 不能為空白。</p>
              <div class="formBlock">
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>E-mail電子信箱：</label>
                  <div class="form_content">
                    <input name="" id="" type="email" placeholder="請輸入電子信箱">
                    <div class="notice_info">同一組E-mail限5分鐘後可重新發送驗證碼。 <a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_error">E-mail格式錯誤，請重新輸入。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>E-mail驗證碼：</label>
                  <div class="form_content">
                    <input name="" id="" type="email" placeholder="請輸入E-mail驗證碼">
                    <div class="notice_info">本系統已發送驗證碼至您的電子信箱，請於10分鐘內輸入驗證碼，以完成驗證。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_warning">E-mail驗證碼已失效，請重新發送驗證碼。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_error">E-mail驗證碼錯誤，請重新輸入。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="btn_grp">
                <input name="" type="reset" value="清除重填">
                <input name="Search" type="submit" value="下一步">
              </div>
            </form>
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