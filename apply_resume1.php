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
            <div class="step active">
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
            <div class="step">
              <div class="no">
                <span>5</span>
              </div>
              報名成功
            </div>
          </div>
          <div class="agreement">
            <h3>個人資料保護及蒐集聲明</h3>
            <p>當您參與中央銀行網站（以下簡稱本網站）各項線上登錄資料或其他相關服務時，可能會請您提供相關個人資料或其他資料。本網站所蒐集的所有個人資料或其他資料，將依個人資料保護法及相關法令之規定，只就其特定目的，做為承辦所提供服務之用，不會任意對其他第三者揭露。此外，當您使用本網站時，本網站將自動收集下列資訊：日期和時間、您所擷取之網頁、您所在之網址、您的瀏覽器種類、您對本網站網頁所做行動（如下載等）及成功與否。這些資訊可能被用來改善本網站之效能，我們也可能監測對本網站造成重大負荷的網址上的行為。</p>
            <p>由本網站所提供的下列各項服務，向使用者蒐集個人資料：</p>
            <p>當您於本網站甄審線上報名，填寫表單時，所提供之姓名、性別、出生日期、身分證字號、聯絡地址、E-mail帳號及聯絡電話等資料。</p>
            <p>本網站所蒐集的個人資料中有關姓名、E-mail帳號、聯絡地址、性別、出生日期、身分證字號及聯絡電話等資料，僅供聯繫及通知之用；甄選結束後，系統將定期刪除您的個人資料。</p>
            <hr>
            <div class="textCenter">
              <input type="checkbox" name="" id=""><em>我已詳細閱讀中央銀行網站個人資料保護及蒐集聲明，並已充分了解且同意遵守全部內容</em>
            </div>
          </div>
          <!-- btn_grp -->
          <div class="btn_grp">
                <input name="" type="reset" value="清除">
                <input name="Search" type="submit" value="送出">
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