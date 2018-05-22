<?php

class GetAllPerson extends Model {

    function __construct() {
        parent::__construct();
    }
   public function ToDo() {
        $this->sql = $this->db->prepare("SELECT * FROM employees");
        $this->sql->execute();
        $this->result = $this->sql->fetchAll(PDO::FETCH_ASSOC);
        
       return $this->result;
    }

}
