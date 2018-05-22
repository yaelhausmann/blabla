<?php

class Update extends Model {

    function __construct() {
        parent::__construct();
    }

    public function ToDo($id, $name, $date) {
        if ((!$id) || (!$name) || (!$date)) {
            $msg = " all fields must be filled  ! ";
            $this->error($msg);
            
          } else {
            try {
                $this->sql = "UPDATE `employees` SET `empName` = '$name', `empDate` = '$date' WHERE `employees`.`empID` = $id";
            $stmt = $this->db->prepare($this->sql);
            $stmt->execute();
            $res=$this->founderror($id); 
            $msg = "New record updated  successfully  [  " . $id . " , " . $name . " , " . $date . "]";
            } catch (Exception $ex) {
                $msg = " no update ,this Id not found !";
                $this->error($msg);
            }
//            $result = $stmt->rowCount();
//            if ($result == 0)
//            //            else
//            { }
        }
        return $msg;
    }
      
      }
          


        
