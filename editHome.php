<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MPARS</title>

        <!-- Bootstrapのための各種cssファイル読み込み -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


        <!-- jQueryのjsファイル読み込み -->
        <script
              src="https://code.jquery.com/jquery-3.3.1.min.js"
              integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
              crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="/js/sendEditHome.js"></script>
        <script type="text/javascript" src="/js/getHomeInfo.js"></script>
        <link rel="stylesheet" href="css/header.css">
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
                            <textarea name="bysinessday-textarea"></textarea>
                        </p>

                        <div class="h3">LOCATION</div>
                        <p>
                            <textarea name="location-textarea"></textarea>
                        </p>
                        <div class="h3">EVENT INFOMATION</div>
                        <p>
                            <div id="event-info-body">
                            <textarea name="event-info-textarea"></textarea>
                                <!--
                                <div class="card">
                                    <div class="card-header"> 臨時開店のお知らせ </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>NAME : </strong> ほげ shop </li>
                                        <li class="list-group-item"><strong>DATE : </strong>2019-1-1</li>
                                        <li class="list-group-item"><strong>HOURS: </strong>18:00〜19:00</li>
                                    </ul>
                                </div>-->
                            </div>
                        </p>

                        <div class="h3">CONTACT INFO</div>
                        <p>
                            <div id="contact-info-body">
                              <textarea name="contact-textarea"></textarea>
                                <!--
                                <div class="card">
                                    <div class="card-header"> ほげ shop </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>ADDRESS : </strong> Kochi</li>
                                        <li class="list-group-item"><strong>PHONE : </strong>1824325235</li>
                                        <li class="list-group-item"><strong>EMAIL : </strong>hogehoge@hoge.com</li>
                                        <li class="list-group-item"><strong>BUSINESS DAY : </strong>月火</li>
                                        <li class="list-group-item"><strong>OPENING HOURS : </strong>18:00 ~ 19:00</li>
                                    </ul>
                                </div>
                                <br>

                                <div class="card">
                                    <div class="card-header"> ほげ shop </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>ADDRESS : </strong> Kochi</li>
                                        <li class="list-group-item"><strong>PHONE : </strong>1824325235</li>
                                        <li class="list-group-item"><strong>EMAIL : </strong>hogehoge@hoge.com</li>
                                        <li class="list-group-item"><strong>BUSINESS DAY : </strong>月火</li>
                                    </ul>
                                </div> -->
                            </div>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <a class="twitter-timeline" data-height="500" data-dnt="true" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> <br/>

                    <h2>Map</h2>
                    <img src="img/map.png" width="100%">
                    <div class="input_file">
                        <div class="preview">
                            <input accept="image/*" id="imgFile" type="file">
                        </div>
                        <p class="btn_upload">
                        </p>
                    </div>
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
<p class="btn_upload"><a　href="home.php">
  <input type="submit" value="保存" class="btn btn-primary" onclick="sendEditHome()" /></a>
</p>
    <!--<script type="text/javascript" src="js/getHomeInfo.js"></script>
    <script type="text/javascript">
        getHomeInfo();
    </script>-->
    <?php require('footer.php');?>
