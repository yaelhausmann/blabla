<?php

class Insert extends Model {

    function __construct() {
        parent::__construct();
    }

    public function ToDo($id, $name, $date) {
        if ((!$id) || (!$name) || (!$date)) {
            $msg = " all fields must be filled  !";
            $this->error($msg);
        } else {
            try {
                $this->sql = "INSERT INTO `employees` (`empID`, `empName`, `empDate`) 
        VALUES ('$id', '$name', '$date')";
            $stmt = $this->db->exec($this->sql);
            $msg = "New record created successfully [  " . $id . " , " . $name . " , " . $date . "]";
            } catch (Exception $ex) {
                $msg = "Impossible to add this ID already exists!";
                $this->error($msg);
            }
            
        }
        return $msg;
    }

}
