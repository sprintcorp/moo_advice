<?php
include_once ('config/init.php');
if(empty($_SESSION['authorized'])){
    header('location:login.php'); 
}

$template = new Template('view/apply.php');

$template->user = $_SESSION['access_code'];

echo $template;
?>