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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2671.389059239013!2d133.71792716262752!3d33.62018645083091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3551fea1a63c66eb%3A0x43b1f9868b20e26c!2z44CSNzgyLTAwMDMg6auY55-l55yM6aaZ576O5biC5Zyf5L2Q5bGx55Sw55S65a6u44OO5Y-jIOWbvemam-S6pOa1geS8mumkqA!5e0!3m2!1sja!2sjp!4v1548747892962" width="100%" height="20%" frameborder="0" style="border:0" allowfullscreen></iframe><br/>

                    <h2>Photos</h2>
                    <img src="img/outside.jpg" width="100%"><br/>

                    <div class="text-center">
                        <a href="loginManager.php">管理者ログイン</a><br/>
                    </div>
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
