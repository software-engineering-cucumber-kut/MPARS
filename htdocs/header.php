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
              crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/header.css">

        <!-- jQuery UIを使う -->
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    </head>
<body>
<div id="wrapper">

<!-- global menu -->
<script type="text/javascript">
const openReservationWithNewTab = () => {
    window.open("/loginCustomer.php");
};
</script>
<div class="header-img"><img src="img/tree.jpg"><img src="img/out.jpg"><img src="img/item.jpg"></div>
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom"> <a class="navbar-brand" href="/"> <img class="logo-img header-img" src="img/logo.svg"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria　expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse menu justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav">
        <li class="nav-item"> <a class="nav-link" href="/home.php">Home<br/>
        <span class="menu-japan">ホーム</span></a> </li>
      <li class="nav-item"> <a class="nav-link" href="/menu.php">Menu<br/>
        <span class="menu-japan">商品一覧</span></a> </li>
      <li class="nav-item"> <a class="nav-link" href="/request.php">Request<br/>
        <span class="menu-japan">ご要望</span></a> </li>
      <li class="nav-item"> <div id="reservation-header-button" class="nav-link" onClick="openReservationWithNewTab();">Reservation<br/>
        <span class="menu-japan">ご予約</span></div> </li>
    </ul>
  </div>
</nav>
<main>
