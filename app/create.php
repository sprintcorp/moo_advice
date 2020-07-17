<?php
include_once ('../config/init.php');

$action = new Action();

if (isset($_POST['submit'])) {
    $access_code = substr(time().str_shuffle(md5(time())),0,10);
    
    
    $insert_data = array(
    'access_code' => $access_code
    );
        
    if($action->create('user', $insert_data))  
    {   
        redirect('../access_code.php', 'Access code created', 'success');
    }         
    }
    
    


?>