<?php
session_start();
$_SESSION = array();
if (isset($_COOKIE["PHPSESSID"])) {
    setcookie("PHPSESSID", '', time() - 2000, '/');
}
session_destroy();
?>

<script type='text/javascript'>window.close();</script>
