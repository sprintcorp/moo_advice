<?php

     function fileUpload($file){
        
            $message= "";
            $file_name = $file['name'];
            $file_size = $file['size'];
            $file_tmp = $file['tmp_name'];
            $file_type = $file['type'];
            
            $file_ext=explode('.',$file_name);
            
            $len = explode('.',$file_name);
            $ext = $len[count($len) - 1];
          
            
            $expensions= array("jpeg","jpg","png");
            
            if(in_array(strtolower($ext),$expensions)=== false){
               $message="extension not allowed, please choose a JPEG or PNG file.";
            }
            
            if($file_size > 2097152) {
               $message='File size must be excately 2 MB';
            }
            
            if(empty($message)) {
               move_uploaded_file($file_tmp,"../upload/".$file_name);
               $message = $file_name;
            }
            return $message;
         
        }



?>