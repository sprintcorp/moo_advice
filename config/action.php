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
        //    while($row = mysqli_fetch_assoc($result))  
        //    {  
        //         $array[] = $row;  
        //    } 
         
           return mysqli_fetch_assoc($result);  
      }
    
    public function getData($table)
    {        
        $query = "SELECT * FROM $table ORDER BY id DESC";
        $result = $this->connection->query($query);
        
        if ($result == false) {
            return false;
        } 
        
        $rows = array();
        
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        
        return $rows;
    }
        
    public function execute($query) 
    {
        var_dump($query);
        $result = $this->connection->query($query);
        
        
        if ($result == false) {
            echo 'Error: cannot execute the command'.$this->connection->error;
            return false;
        } else {
            return true;
        }        
    }
    
    public function delete($id, $table) 
    { 
        $query = "DELETE FROM $table WHERE id = $id";
        
        $result = $this->connection->query($query);
    
        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }
 
    public function escape_string($value)
    {
        return $this->connection->real_escape_string($value);
    }
}
?>