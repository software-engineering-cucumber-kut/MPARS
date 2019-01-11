<?php require('header.php');?>
<div class="container-fluid">
  <br>
  <div class="row text-left">
    <div class="col-md-12">
      <h4>Request</h4>
      <hr>
    </div>
  </div>
  <br>
  ここでは、商品のリクエストやミヤノクチテラスへの要望が投稿できます。
  <br>
  <form>
    <div class="form-group">
      <textarea id="request-text" class="form-control" rows="3" placeholder="テキストを入力してください。"></textarea>
    </div>
    <div class="mx-auto" style="width: 1vw">
      <button type="button" class="btn btn-primary" onclick="sendRequest()">送信</button>
    </div>
  </form>
</div>
<script type="text/javascript" src="js/sendRequest.js"></script>
<?php require('footer.php');?>
