<?php
include_once 'db.php';


class Action extends DbConfig
{
    public function __construct()
    {
        parent::__construct();
    }
    public function create($table_name, $data)  
    {  
         $string = "INSERT INTO ".$table_name." (";            
         $string .= implode(",", array_keys($data)) . ') VALUES (';            
         $string .= "'" . implode("','", array_values($data)) . "')";  
         if(mysqli_query($this->connection, $string))  
         {  
              return true;  
         }  
         else  
         {  
              echo mysqli_error($this->connection);  
         }  
    } 

    public function update($table_name, $fields, $where_condition)  
      {  
           $query = '';  
           $condition = '';  
           foreach($fields as $key => $value)  
           {  
                $query .= $key . "='".$value."', ";  
           }  
           $query = substr($query, 0, -2);  
            
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . "='".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
           
           $query = "UPDATE ".$table_name." SET ".$query." WHERE ".$condition."";  
           if(mysqli_query($this->connection, $query))  
           {  
                return true;  
           }  
      }  

    public function browse($table_name, $where_condition)  
      {  
           $condition = '';  
           $array = array();  
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . " = '".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
           $query = "SELECT * FROM ".$table_name." WHERE " . $condition;  
           $result = mysqli_query($this->connection, $query);           
           return mysqli_fetch_assoc($result);  
      }
   
      public function read($table_name)  
      {  
        $array = array();  
        $query = "SELECT * FROM ".$table_name."";  
        $result = mysqli_query($this->connection, $query);  
        while($row = mysqli_fetch_assoc($result))  
        {  
             $array[] = $row;  
        }  
        return $array; 
      }

      public function login($table_name, $data)  
      {  
           $condition = '';  
           $array = array();  
           foreach($data as $key => $value)  
           {  
                $condition .= $key . " = '".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
           $query = "SELECT * FROM ".$table_name." WHERE " . $condition;  
           $result = mysqli_query($this->connection, $query);           
           return mysqli_fetch_assoc($result) ? true : false;  
      }
    
    
 
    public function escape_string($value)
    {
        return $this->connection->real_escape_string($value);
    }
}
?>