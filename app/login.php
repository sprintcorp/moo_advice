<?php
include_once ('../config/init.php');
include_once ('../config/validation.php');

$action = new Action();

if (isset($_POST['submit'])) {
   
    
    $insert_data = array(
    'access_code' => $action->escape_string($_POST['access_code'])
    );
        
    if($action->login('user', $insert_data))  
    {  
        $_SESSION['authorized'] = "true";
        $_SESSION['access_code'] = $_POST['access_code'];
        redirect('../apply.php'); 
    } else{
        // $_SESSION['message'] = "Invalid Access Code";
        // header('location:../login.php');
        redirect('../login.php', 'Invalid Access Code', 'error');
    }     
    }
    
    


?>