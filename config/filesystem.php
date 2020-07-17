<?php

class File{
   
    public function file($file){
        move_uploaded_file($file["image"]["tmp_name"],"../uploads/" . $file["image"]["name"]);			
        $location=$file["image"]["name"];
        return $location;
        }
}


?>