<?php
include_once ('../config/action.php');
include_once ('../config/validation.php');

$action = new Action();

if (isset($_POST['submit'])) {
    $access_code = substr(time().str_shuffle(md5(time())),0,10);
    move_uploaded_file($_FILES["image"]["tmp_name"],"../upload/" . $_FILES["image"]["name"]);			
    $location=$_FILES["image"]["name"];
    
    $insert_data = array(
    'firstname' => $action->escape_string($_POST['firstname']),
    'lastname' => $action->escape_string($_POST['lastname']),
    'home_address' => $action->escape_string($_POST['address']),
    'education' => $action->escape_string($_POST['education']),
    'subjects' => $action->escape_string(implode(",",$_POST['subject'])),
    'marrital_status' => $action->escape_string($_POST['marrital_status']),
    'religion' => $action->escape_string($_POST['religion']),
    'state_of_origin' => $action->escape_string($_POST['state']),
    'dob' => $action->escape_string($_POST['dob']),
    'image' => $location,
    'access_code' => $access_code
    );
        
    if($action->create('user', $insert_data))  
    {  
        $_SESSION['authorized'] = true;
        $_SESSION['access_code'] = $access_code;
        header('location:../confirm.php');
        // echo'Post Inserted';  
    }      
    }
    
    


?>