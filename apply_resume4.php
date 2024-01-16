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
            <div class="step active">
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
          <div class="applyForm">
            <form action="" class="form_grid">
              <!-- 一、基本資料 -->
              <div class="formText">
                <div class="formTitle">一、基本資料</div>
              </div>
              <div class="formBlock">
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>姓名：</div>
                  <div class="form_content">王大明</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>身分證字號：</div>
                  <div class="form_content">A123456789</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>出生日期：</div>
                  <div class="form_content">79/02/25</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>外國國籍：</div>
                  <div class="form_content">有，美國</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>聯絡電話：</div>
                  <div class="form_content">
                    <div class="form_inline">
                      <div>手機號碼：</div>0912345678
                    </div>
                    <div class="form_inline">
                      <div>市內電話：</div>0912345678
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>地址：</div>
                  <div class="form_content">臺北市中正區重慶南路二段51號</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>電子郵件E-mail：</div>
                  <div class="form_content">test@gmail.com</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>附件上傳：</div>
                  <div class="form_content">
                    <!-- uploadBlock -->
                    <div class="uploadBlock">
                      <p>1. 國民身分證正面及反面</p>
                      <div class="applyFileList">
                        <ol>
                          <li>1.王大明-國民身分證.pdf <span>1.3mb</span></li>
                          <li>2.<a href="">王大明-國民身分證.pdf</a><span>1.3mb</span></li>
                        </ol>
                      </div>
                    </div>
                    <!-- uploadBlock -->
                    <div class="uploadBlock">
                      <p>2. 相片</p>
                      <div class="applyFileList">
                        <ol>
                          <li>1.王大明-相片.png <span>1.3mb</span></li>
                          <li>2.<a href="">王大明-相片.png</a><span>1.3mb</span></li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- 二、學歷 -->
              <div class="formText">
                <div class="formTitle">二、學歷</div>
                <div class="number">共 2 筆資料</div>
              </div>
              <div class="formBlock">
                <div class="formBlockTitle">第一筆資料</div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>學校：</div>
                  <div class="form_content">New York University</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>科系：</div>
                  <div class="form_content">Financial Management Financial Management Financial Management</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>教育程度：</div>
                  <div class="form_content">碩士</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>修業年限：</div>
                  <div class="form_content">103/09/01 - 105/06/30</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>修業情形：</div>
                  <div class="form_content">畢業</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>附件上傳：</div>
                  <div class="form_content">
                    <!-- uploadBlock -->
                    <div class="uploadBlock">
                      <div class="applyFileList">
                        <ol>
                          <li>1.王大明-學位證書.pdf <span>1.3mb</span></li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="formBlock">
                <div class="formBlockTitle">第二筆資料</div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>學校：</div>
                  <div class="form_content">國立臺灣大學</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>科系：</div>
                  <div class="form_content">金融保險學系</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>教育程度：</div>
                  <div class="form_content">學士</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>修業年限：</div>
                  <div class="form_content">99/09/01 - 103/06/30</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>修業情形：</div>
                  <div class="form_content">畢業</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>附件上傳：</div>
                  <div class="form_content">
                    <!-- uploadBlock -->
                    <div class="uploadBlock">
                      <div class="applyFileList">
                        <ol>
                          <li>1.王大明-學位證書.pdf <span>1.3mb</span></li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- 三、成績單 -->
              <div class="formText">
                <div class="formTitle">三、成績單</div>
              </div>
              <div class="formBlock">
                <!-- form_grp -->
                <div class="form_grp">
                  <div for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>附件上傳：</div>
                  <div class="form_content">
                    <!-- uploadBlock -->
                    <div class="uploadBlock">
                      <div class="applyFileList">
                        <ol>
                          <li>1.王大明-成績單.pdf <span>1.3mb</span></li>
                          <li>2.<a href="">王大明-成績單.pdf</a><span>1.3mb</span></li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- 四、考試 -->
              <div class="formText">
                <div class="formTitle">四、考試</div>
                <div class="number">共 2 筆資料</div>
              </div>
              <div class="formBlock">
                <div class="formBlockTitle">第一筆資料</div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>年度：</div>
                  <div class="form_content">109</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>考試名稱：</div>
                  <div class="form_content">國家高等考試3級</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title">考試類科：</div>
                  <div class="form_content">金融保險</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>考試成績：</div>
                  <div class="form_content">通過</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>附件上傳：</div>
                  <div class="form_content">
                    <!-- uploadBlock -->
                    <div class="uploadBlock">
                      <div class="applyFileList">
                        <ol>
                          <li>1.王大明-考試證書01.pdf <span>1.3mb</span></li>
                          <li>2.<a href="">王大明-考試證書01.pdf</a><span>1.3mb</span></li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="formBlock">
                <div class="formBlockTitle">第二筆資料</div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>年度：</div>
                  <div class="form_content">106</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>考試名稱：</div>
                  <div class="form_content">TOEIC Listening and Reading Test</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title">考試類科：</div>
                  <div class="form_content"></div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>考試成績：</div>
                  <div class="form_content">930</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>附件上傳：</div>
                  <div class="form_content">
                    <!-- uploadBlock -->
                    <div class="uploadBlock">
                      <div class="applyFileList">
                        <ol>
                          <li>1.王大明-考試證書01.pdf <span>1.3mb</span></li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- 五、經歷 -->
              <div class="formText">
                <div class="formTitle">五、經歷</div>
                <div class="number">共 2 筆資料</div>
              </div>
              <div class="formBlock">
                <div class="formBlockTitle">第一筆資料</div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>機關：</div>
                  <div class="form_content">國立台灣大學金融管理學系</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>職稱：</div>
                  <div class="form_content">講師</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>服務期間：</div>
                  <div class="form_content">106/03/01 至 110/10/31</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>附件上傳：</label>
                  <div class="form_content">
                    <!-- uploadBlock -->
                    <div class="uploadBlock">
                       <div class="applyFileList">
                        <ol>
                          <li>1.王大明-經歷證明01.pdf <span>1.3mb</span></li>
                          <li>2.<a href="">王大明-經歷證明01.pdf</a><span>1.3mb</span></li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="formBlock">
                <div class="formBlockTitle">第二筆資料</div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>機關：</div>
                  <div class="form_content">財政部臺北國稅局</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>職稱：</div>
                  <div class="form_content">科員</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>服務期間：</div>
                  <div class="form_content">111/02/01  至  迄今</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>附件上傳：</div>
                  <div class="form_content">
                    <!-- uploadBlock -->
                    <div class="uploadBlock">
                       <div class="applyFileList">
                        <ol>
                          <li>1.王大明-經歷證明01.pdf <span>1.3mb</span></li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- 六、自傳 -->
              <div class="formText">
                <div class="formTitle">六、自傳</div>
              </div>
              <div class="formBlock">
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>附件上傳：</div>
                  <div class="form_content">
                    <!-- uploadBlock -->
                    <div class="uploadBlock">
                      <div class="applyFileList">
                        <ol>
                          <li>1.王大明-自傳.pdf <span>1.3mb</span></li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- 七、其他資料 -->
              <div class="formText">
                <div class="formTitle">七、其他資料</div>
                <div class="number">共 2 筆資料</div>
              </div>
              <div class="formBlock">
                <div class="formBlockTitle">第一筆資料</div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>佐證資料名稱：</div>
                  <div class="form_content">碩士論文-關於OOOOO之研究計畫</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>附件上傳：</div>
                  <div class="form_content">
                    <!-- uploadBlock -->
                    <div class="uploadBlock">
                      <div class="applyFileList">
                        <ol>
                          <li>1.王大明-論文01.pdf <span>1.3mb</span></li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="formBlock">
                <div class="formBlockTitle">第二筆資料</div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>佐證資料名稱：</div>
                  <div class="form_content">相關研究計畫</div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <div class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>附件上傳：</div>
                  <div class="form_content">
                    <!-- uploadBlock -->
                    <div class="uploadBlock">
                      <div class="applyFileList">
                        <ol>
                          <li>1.王大明-論文01.pdf <span>1.3mb</span></li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- 八、驗證碼 -->
              <div class="formText">
                <div class="formTitle">八、驗證碼</div>
              </div>
              <div class="formBlock">
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>驗證碼：</label>
                  <div class="form_content">
                    <img src="images/basic/captcha.gif" alt="" class="captcha">
                    <input type="text" id="" value="">
                    <button type="button" class="btn btn-sm btn_reload">更換驗證碼</button>
                    <button type="button" class="btn btn-sm btn_sound">語音播放</button>
                    <div class="notice_info">如果無法使用語音，請下載語音檔案。 <a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a></div>
                    <div class="notice_error">您輸入的驗證碼錯誤，請重新輸入。 <a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a></div>
                  </div>
                </div>
              </div>
              <!-- btn_grp -->
              <div class="btn_grp">
                <input name="" type="reset" value="回上一步">
                <input name="Search" type="submit" value="確認送出">
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