<?php require('header.php');?>
<link rel="stylesheet" type="text/css" href="css/menu.css">
<!-- body -->
<div class="container-fluid">
    <br>
    <div class="row text-left">
        <div class="col-md-12">
            <h4>Items</h4>
            <hr>
        </div>
    </div>
    <br>
    <div class="row" id="items">
    </div>
</div>
<script src="js/getProducts.js?<?php echo date("YmdHis"); ?>" type="text/javascript"></script>
<?php require('footer.php');?>
