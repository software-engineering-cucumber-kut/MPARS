<?php require('header.php');?>
<link rel="stylesheet" type="text/css" href="css/compRequest.css">
<script type="text/javascript">
    const goBuck = () => {
        location.href = "http://localhost:8888/home.php";
    }
</script>
<div class="container-fluid">
    <div class="row text-center">
        <div class="col-md-12">
            <div class="comp-text"> リクエストが投稿されました。 </div>
            <button type="button" class="btn btn-primary" onclick="goBuck()">戻る</button>
        </div>
    </div>
</div>
<?php require('footer.php');?>