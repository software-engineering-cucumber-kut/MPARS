<?php
  include('managerHeader.php');
?>
        <script type="text/javascript" src="/js/sendEditHome.js"></script>
        <script type="text/javascript" src="/js/getEditHomeInfo.js"></script>
        <link rel="stylesheet" href="css/editHome.css">
        <style type="text/css">
          textarea{
            width:100%;
            height:30%;
          }
        </style>
    </head>
<body>
<div id="wrapper">
<!-- global menu -->
<div class="d-flex flex-row">
<div class="header-img">
  <img src="img/logo.jpg">
</div>
</div>
<div align="right"><a href="manager.php">管理者ホームへ</a></div>

<hr>

<main>


<link href="css/editHome.css" rel="stylesheet">
<!-- body -->
<div class="navbar-content">
    <div id="home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="space-side">
                        <div class="h3">BUSINESS DAY</div>
                        <p id="business-day-body">
                            火・金曜日 11:30〜14:00 （クレープは13:00〜16:00）
                        </p>
                        <div class="h3">LOCATION</div>
                        <p>
                            高知工科大学国際交流会館 <br/> 〒782-8502 高知県香美市土佐山田町宮ノ口185
                        </p>
                        <div class="h3">EVENT INFOMATION</div>
                        <p>
                            <div id="event-info-body">
                            </div>
                        </p>

                        <div class="h3">CONTACT INFO</div>
                        <p>
                            <div id="contact-info-body">
                            </div>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">

                    <h2>Map</h2>
                    <img src="img/map.png" width="100%">
                    <div class="input_file">
                        <div class="preview">
                            <input accept="image/*" id="imgFile" type="file">
                        </div>
                        <p class="btn_upload">
                        </p>
                    <h2>Photos</h2>
                    <img src="img/outside.jpg" width="100%">
                    <div class="input_file">
                        <div class="preview">
                            <input accept="image/*" id="imgFile" type="file">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="button_wrapper">
<p class="btn_upload">
  <input type="submit" onclick="location.href='./manager.php'"　value="保存" class="btn btn-primary" onclick="sendEditHome()" />
</p>
</div>

<!-- 時間の選択一覧表示の処理 -->
<script type="text/javascript">
  getEditHomeInfo();
</script>

<?php require('footer.php'); ?>
<?php
  include('managerFooter.php');
?>
