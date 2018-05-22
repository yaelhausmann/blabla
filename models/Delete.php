<?php

class Delete extends Model {

    function __construct() {
        parent::__construct();
    }

    public function ToDo($id, $name, $date) {
        if ((!$id)) {
            $msg = " you must be filled the id ! ";
            $this->error($msg);
        } else {
            try{
            $this->sql = "DELETE FROM `employees` WHERE `employees`.`empID` = $id";

            $stmt = $this->db->prepare($this->sql);
          
            $res=$this->founderror($id); 
            $name= $res['empName'];
            $stmt->execute();
            $msg = "Employee deleted  successfully  {  $id , $name  }";
        
           return $msg;
                    
           
            } catch (Exception $ex) {
                $msg = "impossible to delete,the ID doesn't exists!";
                $this->error($msg);
            } 
            
    }

}
}