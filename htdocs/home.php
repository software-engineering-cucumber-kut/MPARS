<?php require('header.php');?>
<link href="css/home.css" rel="stylesheet">
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

                    <h2>Photos</h2>
                    <img src="img/outside.jpg" width="100%">
                </div>
            </div>
        </div>
    </div>
</div>
    <script type="text/javascript" src="js/getHomeInfo.js"></script>
    <script type="text/javascript">
        getHomeInfo();
    </script>
    <?php require('footer.php');?>
