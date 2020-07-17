<?php
include_once ('config/init.php');
if(empty($_SESSION['authorized'])){
    header('location:login.php'); 
}

$template = new Template('view/status.php');
$action = new Action();
$template->condition = array(  
    'access_code'     =>     $_SESSION['access_code']  
);
$template->user = $action->browse('user',$template->condition);
echo $template;
?>