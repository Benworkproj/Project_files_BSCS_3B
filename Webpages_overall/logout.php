<?php
session_start();
session_destroy();
header("Location: /Webpages_overall/login_form.php");
?>