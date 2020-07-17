<?php
include_once ('config/init.php');
// if(empty($_SESSION['authorized'])){
//     header('location:login.php'); 
// }

$template = new Template('view/access_code.php');
$action = new Action();
$template->users = $action->read('user');

echo $template;

?>