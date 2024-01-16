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
            <div class="step active">
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
            <h3>中央銀行甄用經濟金融研究專業人員(辦事員)</h3>
            <ol>
              <li><em>每一甄選案限報名一次，不得重複報名，以身份證字號檢核，如身分證檢核已有資料則無法報名。</em></li>
              <li><em>確認填寫資料後，不得修改及重複報名，請謹慎填寫。</em></li>
              <li>對甄選職務所做的文字說明描述與介紹，前述報名條件合格者，先進行書面資料審查，獲入選者，另行通知參加口試。如有任何疑問或登錄資料有誤，請電洽中央銀行電話：(02)-2357-1999。</li>
            </ol>
          </div>
          <div class="applyForm">
            <form action="" class="form_grid">
              <p>註:<abbr class="necessary" title="“為必填(選)欄位,不能為空白。“">必填</abbr>為必填(選)欄位, 不能為空白。</p>
              <!-- 一、基本資料 -->
              <div class="formText">
                <div class="formTitle">一、基本資料</div>
                <p>請填寫基本資料欄位。</p>
              </div>
              <div class="formBlock">
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>姓名：</label>
                  <div class="form_content">
                    <input name="" id="" type="email" placeholder="請輸入姓名">
                    <div class="notice_error">格式錯誤，請重新輸入。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_warning">請輸入姓名。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>身分證字號：</label>
                  <div class="form_content">
                    <div class="textBlue">請輸入身分證字號，點選檢核按鈕，檢核身份證字號是否重複報名。</div>
                    <div class="form_inline applyId">
                      <input name="" id="" type="text" placeholder="請輸入身分證字號"><button type="button" class="btn btn-sm">身分證檢核</button>
                    </div>
                    <div class="notice_error">格式錯誤，請重新輸入。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_error">此身份證字號已存在，不得重複報名；如有疑問請本行電話(02)-2357-1999。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_info">檢核成功，請於檔案上傳區上傳身份證正反面。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>出生日期：</label>
                  <div class="form_content">
                    <div class="textBlue">請選擇出生日期，民國年，例：80/01/24</div>
                    <input name="" id="" type="date">
                    <div class="notice_error">格式錯誤，請重新輸入。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>外國國籍：</label>
                  <div class="form_content">
                    <div class="form_inline radio_grp">
                      <label><input name="radioSample" type="radio" value=""><span>無</span></label>
                      <label><input name="radioSample" type="radio" value=""><span>有</span></label>
                    </div>
                    <input name="" id="" type="text" placeholder="請輸入國家名稱">
                    <div class="notice_info">有外國國籍者，請輸入國家名稱，若無外國國籍者免填國家名稱。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_error">格式錯誤，請重新輸入。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>聯絡電話：</label>
                  <div class="form_content">
                    <div class="form_inline">
                      <label>手機號碼：</label><input type="text" id="" placeholder="0912345678"><span>(例：0968123456)</span>
                    </div>
                    <div class="form_inline">
                      <label>市內電話：</label><input type="text" id="" placeholder="02-22520000"><span>(例：02-22520000#123)</span>
                    </div>
                    <div class="notice_info">至少需填寫一組聯絡電話。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_error">格式錯誤，請重新輸入。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>地址：</label>
                  <div class="form_content">
                    <input name="" id="" type="email" placeholder="請輸入完整地址">
                    <div class="notice_error">格式錯誤，請重新輸入。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_warning">請輸入地址。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>電子郵件E-mail：</label>
                  <div class="form_content">
                    <input name="" id="" type="email" placeholder="請輸入電子郵件E-mail">
                    <div class="notice_error">E-mail格式錯誤，請重新輸入。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>附件上傳：</label>
                  <div class="form_content">
                    <div class="textBlue">
                      <ul>
                        <li>國民身分證請上傳正反面彩色照片於同一頁，檔名「姓名-國民身分證」。</li>
                        <li>照片請上傳兩吋半身正面脫帽彩色照片，檔名「姓名-相片」。</li>
                      </ul>
                    </div>
                    <!-- uploadBlock -->
                    <div class="uploadBlock">
                      <p>1. 國民身分證正面及反面</p>
                      <div class="form_inline applyId">
                        <input name="" id="" type="text" placeholder="請選擇檔案"><button type="button" class="btn btn-sm btn_upload">上傳檔案</button>
                      </div>
                      <div class="applyFileList">
                        <ol>
                          <li>1.王大明-國民身分證.pdf <a href="" class="deleteFile">刪除</a></li>
                          <li>2.<a href="">王大明-國民身分證.pdf</a><a href="" class="deleteFile">刪除</a></li>
                        </ol>
                      </div>
                      <div class="notice_info">檔案格式僅接受PDF檔，檔案大小以5MB為限。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                      <div class="notice_warning">上傳的檔案大小超過限制，請重新上傳。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                      <div class="notice_error">上傳的檔案格式不支援，請重新上傳。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                    </div>
                    <!-- uploadBlock -->
                    <div class="uploadBlock">
                      <p>2. 相片</p>
                      <div class="form_inline applyId">
                        <input name="" id="" type="text" placeholder="請選擇檔案"><button type="button" class="btn btn-sm btn_upload">上傳檔案</button>
                      </div>
                      <div class="applyFileList">
                        <ol>
                          <li>1.王大明-相片.png <a href="" class="deleteFile">刪除</a></li>
                          <li>2.<a href="">王大明-相片.png</a><a href="" class="deleteFile">刪除</a></li>
                        </ol>
                      </div>
                      <div class="notice_info">檔案格式僅接受PDF檔，檔案大小以5MB為限。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                      <div class="notice_warning">上傳的檔案大小超過限制，請重新上傳。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                      <div class="notice_error">上傳的檔案格式不支援，請重新上傳。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- 二、學歷 -->
              <div class="formText">
                <div class="formTitle">二、學歷</div>
                <ol>
                  <li>學歷敘寫方式由高至低，最少填寫1筆，最多可填5筆；有填寫時必需上傳附件證明，例：畢業證書。</li>
                  <li>學校、科系，字數限制20字內。</li>
                  <li>教育程度相同時，修業年限較晚者填寫在前。</li>
                </ol>
                <button type="button" class="btn btn-sm btn_add">新增一筆</button>
              </div>
              <div class="formBlock">
                <div class="formBlockTitle">第一筆資料</div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>學校：</label>
                  <div class="form_content">
                    <input name="" id="" type="email" placeholder="請輸入學校">
                    <div class="notice_warning">請輸入內容。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_error">格式錯誤，請重新輸入。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>科系：</label>
                  <div class="form_content">
                    <input name="" id="" type="email" placeholder="請輸入學校">
                    <div class="notice_warning">請輸入內容。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_error">格式錯誤，請重新輸入。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>教育程度：</label>
                  <div class="form_content">
                    <div class="form_inline radio_grp">
                      <label><input name="radioSample" type="radio" value=""><span>博士</span></label>
                      <label><input name="radioSample" type="radio" value=""><span>碩士</span></label>
                      <label><input name="radioSample" type="radio" value=""><span>學士</span></label>
                      <label><input name="radioSample" type="radio" value=""><span>專科</span></label>
                    </div>
                    <div class="notice_warning">請選擇內容。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_error">格式錯誤，請重新輸入。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>修業年限：</label>
                  <div class="form_content">
                    <div class="form_inline applyDate">
                      <input name="" id="" type="date"> <span>至</span> <input name="" id="" type="date">
                    </div>
                    <div class="notice_info">修業年限格式範例：112/01至112/12；尚未畢業請輸入預計畢業修業年限。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_warning">請輸入內容。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_error">格式錯誤，請重新輸入。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>修業情形：</label>
                  <div class="form_content">
                    <div class="form_inline radio_grp">
                      <label><input name="radioSample" type="radio" value=""><span>畢業</span></label>
                      <label><input name="radioSample" type="radio" value=""><span>結業</span></label>
                      <label><input name="radioSample" type="radio" value=""><span>肄業</span></label>
                      <label><input name="radioSample" type="radio" value=""><span>應屆畢業</span></label>
                    </div>
                    <div class="notice_warning">請選擇內容。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_error">格式錯誤，請重新輸入。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>附件上傳：</label>
                  <div class="form_content">
                    <div class="textBlue">
                    請上傳學歷證明，檔名範例「姓名-學位證書01」，多筆時請依序填寫序號。
                    </div>
                    <!-- uploadBlock -->
                    <div class="uploadBlock">
                      <div class="form_inline applyId">
                        <input name="" id="" type="text" placeholder="請選擇檔案"><button type="button" class="btn btn-sm btn_upload">上傳檔案</button>
                      </div>
                      <div class="applyFileList">
                        <ol>
                          <li>1.王大明-學位證書.pdf <a href="" class="deleteFile">刪除</a></li>
                          <li>2.<a href="">王大明-學位證書.pdf</a><a href="" class="deleteFile">刪除</a></li>
                        </ol>
                      </div>
                      <div class="notice_info">檔案格式僅接受PDF檔，檔案大小以5MB為限。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                      <div class="notice_warning">上傳的檔案大小超過限制，請重新上傳。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                      <div class="notice_error">上傳的檔案格式不支援，請重新上傳。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="btn_grp">
                  <button type="button" class="btn btn-sm btn_minus">移除此筆</button>
                </div>
              </div>
              <!-- 三、成績單 -->
              <div class="formText">
                <div class="formTitle">三、成績單</div>
                <ol>
                  <li>請上傳成績單附件，多筆成績單時請合併為單檔上傳。</li>
                </ol>
              </div>
              <div class="formBlock">
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>附件上傳：</label>
                  <div class="form_content">
                    <div class="textBlue">請上傳成績單附件，多筆成績單時請合併為單檔上傳，檔名範例「姓名-成績單」。</div>
                    <!-- uploadBlock -->
                    <div class="uploadBlock">
                      <div class="form_inline applyId">
                        <input name="" id="" type="text" placeholder="請選擇檔案"><button type="button" class="btn btn-sm btn_upload">上傳檔案</button>
                      </div>
                      <div class="applyFileList">
                        <ol>
                          <li>1.王大明-成績單.pdf <a href="" class="deleteFile">刪除</a></li>
                          <li>2.<a href="">王大明-成績單.pdf</a><a href="" class="deleteFile">刪除</a></li>
                        </ol>
                      </div>
                      <div class="notice_info">檔案格式僅接受PDF檔，檔案大小以5MB為限。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                      <div class="notice_warning">上傳的檔案大小超過限制，請重新上傳。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                      <div class="notice_error">上傳的檔案格式不支援，請重新上傳。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- 四、考試 -->
              <div class="formText">
                <div class="formTitle">四、考試</div>
                <ol>
                  <li>考試敘寫方式由新至舊，最多可填寫5筆，無則免填。</li>
                  <li>有填寫時，必需上傳附件證明，例：TOEIC證書、高考及格證書、證照證書。</li>
                  <li>考試名稱、考試類科，字數限制20字內。</li>
                </ol>
                <button type="button" class="btn btn-sm btn_add">新增一筆</button>
              </div>
              <div class="formBlock">
                <div class="formBlockTitle">第一筆資料</div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>年度：</label>
                  <div class="form_content">
                    <input name="" id="" type="email" placeholder="請輸入年度">
                    <div class="notice_info">年度格式範例：112年。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_warning">請輸入內容。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_error">格式錯誤，請重新輸入。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>考試名稱：</label>
                  <div class="form_content">
                    <input name="" id="" type="email" placeholder="請輸入考試名稱">
                    <div class="notice_warning">請輸入內容。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_error">格式錯誤，請重新輸入。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title">考試類科：</label>
                  <div class="form_content">
                    <input name="" id="" type="email" placeholder="請輸入考試類科">
                    <div class="notice_warning">請輸入內容。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>考試成績：</label>
                  <div class="form_content">
                    <input name="" id="" type="email" placeholder="請輸入考試成績">
                    <div class="notice_info">考試成績格式範例：OO分、通過、及格。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_warning">請輸入內容。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_error">格式錯誤，請重新輸入。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>附件上傳：</label>
                  <div class="form_content">
                    <div class="textBlue">請上傳考試證明，檔名範例「姓名-考試證書01」，多筆時請依序填寫序號</div>
                    <!-- uploadBlock -->
                    <div class="uploadBlock">
                      <div class="form_inline applyId">
                        <input name="" id="" type="text" placeholder="請選擇檔案"><button type="button" class="btn btn-sm btn_upload">上傳檔案</button>
                      </div>
                      <div class="applyFileList">
                        <ol>
                          <li>1.王大明-考試證書01.pdf <a href="" class="deleteFile">刪除</a></li>
                          <li>2.<a href="">王大明-考試證書01.pdf</a><a href="" class="deleteFile">刪除</a></li>
                        </ol>
                      </div>
                      <div class="notice_info">檔案格式僅接受PDF檔，檔案大小以5MB為限。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                      <div class="notice_warning">上傳的檔案大小超過限制，請重新上傳。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                      <div class="notice_error">上傳的檔案格式不支援，請重新上傳。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="btn_grp">
                  <button type="button" class="btn btn-sm btn_minus">移除此筆</button>
                </div>
              </div>
              <!-- 五、經歷 -->
              <div class="formText">
                <div class="formTitle">五、經歷</div>
                <ol>
                  <li>經歷敘寫方式由前至今，最多可填寫5筆，無則免填。</li>
                  <li>有填寫時，必需上傳附件證明，例：服務證明、在職證明。</li>
                  <li>機關、職稱，字數限制20字內。</li>
                </ol>
                <button type="button" class="btn btn-sm btn_add">新增一筆</button>
              </div>
              <div class="formBlock">
                <div class="formBlockTitle">第一筆資料</div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>機關：</label>
                  <div class="form_content">
                    <input name="" id="" type="email" placeholder="請輸入機關">
                    <div class="notice_info">機關格式範例：OO大學、OO股份有限公司。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_warning">請輸入內容。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_error">格式錯誤，請重新輸入。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>職稱：</label>
                  <div class="form_content">
                    <input name="" id="" type="email" placeholder="請輸入職稱">
                    <div class="notice_warning">請輸入內容。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_error">格式錯誤，請重新輸入。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>服務期間：</label>
                  <div class="form_content">
                    <div class="form_inline applyDate">
                      <input name="" id="" type="date"> <span>至</span> <input name="" id="" type="date"> <label><input name="radioSample" type="radio" value=""><span>迄今</span></label>
                    </div>
                    <div class="notice_info">服務期間格式範例：111/06/01至112/11/30<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_warning">請輸入內容。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                    <div class="notice_error">格式錯誤，請重新輸入。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>附件上傳：</label>
                  <div class="form_content">
                    <div class="textBlue">請上傳經歷證明，檔名範例「姓名-經歷證明01」，多筆時請依序填寫序號。</div>
                    <!-- uploadBlock -->
                    <div class="uploadBlock">
                      <div class="form_inline applyId">
                        <input name="" id="" type="text" placeholder="請選擇檔案"><button type="button" class="btn btn-sm btn_upload">上傳檔案</button>
                      </div>
                      <div class="applyFileList">
                        <ol>
                          <li>1.王大明-經歷證明01.pdf <a href="" class="deleteFile">刪除</a></li>
                          <li>2.<a href="">王大明-經歷證明01.pdf</a><a href="" class="deleteFile">刪除</a></li>
                        </ol>
                      </div>
                      <div class="notice_info">檔案格式僅接受PDF檔，檔案大小以5MB為限。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                      <div class="notice_warning">上傳的檔案大小超過限制，請重新上傳。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                      <div class="notice_error">上傳的檔案格式不支援，請重新上傳。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="btn_grp">
                  <button type="button" class="btn btn-sm btn_minus">移除此筆</button>
                </div>
              </div>
              <!-- 六、自傳 -->
              <div class="formText">
                <div class="formTitle">六、自傳</div>
                <ol>
                  <li>請上傳自傳附件。</li>
                  <li>檔案格式PDF檔，檔案限5MB以下。</li>
                </ol>
              </div>
              <div class="formBlock">
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>附件上傳：</label>
                  <div class="form_content">
                    <div class="textBlue">請上傳自傳附件，檔名範例「姓名-自傳」。</div>
                    <!-- uploadBlock -->
                    <div class="uploadBlock">
                      <div class="form_inline applyId">
                        <input name="" id="" type="text" placeholder="請選擇檔案"><button type="button" class="btn btn-sm btn_upload">上傳檔案</button>
                      </div>
                      <div class="applyFileList">
                        <ol>
                          <li>1.王大明-自傳.pdf <a href="" class="deleteFile">刪除</a></li>
                          <li>2.<a href="">王大明-自傳.pdf</a><a href="" class="deleteFile">刪除</a></li>
                        </ol>
                      </div>
                      <div class="notice_info">檔案格式僅接受PDF檔，檔案大小以5MB為限。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                      <div class="notice_warning">上傳的檔案大小超過限制，請重新上傳。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                      <div class="notice_error">上傳的檔案格式不支援，請重新上傳。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- 七、其他資料 -->
              <div class="formText">
                <div class="formTitle">七、其他資料</div>
                <ol>
                  <li>請提供其他佐證資料，如論文、推薦函影本等，最多可填寫5筆，無則免填。</li>
                  <li>有填寫時，必需上傳附件證明。</li>
                  <li>佐證資料名稱，字數限制30字內。</li>
                  <li>論文資料，可提供碩博士論文知識加值系統之該資料網址。</li>
                  <li>附件超過檔案限制大小時，檔案可上傳如google雲端硬碟，並提供網址列於附件，或電洽：(02)-2357-1999。</li>
                </ol>
                <button type="button" class="btn btn-sm btn_add">新增一筆</button>
              </div>
              <div class="formBlock">
                <div class="formBlockTitle">第一筆資料</div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>佐證資料名稱：</label>
                  <div class="form_content">
                    <input name="" id="" type="email" placeholder="請輸入佐證資料名稱">
                    <div class="notice_info">佐證資料名稱範例：碩士論文-OOOO之研究。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- form_grp -->
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">必填</abbr>附件上傳：</label>
                  <div class="form_content">
                    <div class="textBlue">請上傳佐證資料，檔名範例「姓名-其他資料01」，多筆時請依序填寫序號。</div>
                    <!-- uploadBlock -->
                    <div class="uploadBlock">
                      <div class="form_inline applyId">
                        <input name="" id="" type="text" placeholder="請選擇檔案"><button type="button" class="btn btn-sm btn_upload">上傳檔案</button>
                      </div>
                      <div class="applyFileList">
                        <ol>
                          <li>1.王大明-論文01.pdf <a href="" class="deleteFile">刪除</a></li>
                          <li>2.<a href="">王大明-論文01.pdf</a><a href="" class="deleteFile">刪除</a></li>
                        </ol>
                      </div>
                      <div class="notice_info">檔案格式僅接受PDF檔，檔案大小以5MB為限。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                      <div class="notice_warning">上傳的檔案大小超過限制，請重新上傳。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                      <div class="notice_error">上傳的檔案格式不支援，請重新上傳。<a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="btn_grp">
                  <button type="button" class="btn btn-sm btn_minus">移除此筆</button>
                </div>
              </div>
              <!-- btn_grp -->
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