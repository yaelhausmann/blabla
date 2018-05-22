<?php

class Model {

    function __construct() {
        $this->db = new Database();
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    public function error($msg) {
        $this->param= FALSE;
        require_once 'controllers/error.php';
        $err = new APPError($msg);
        $err->index();
        
    }
    public function founderror($id) {
      
          $sql = $this->db->prepare("SELECT * FROM employees where empID='$id'");
          $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        if ($result==NULL){ throw new Exception('this Id not found');}
         return $result;
       
           
       }
}
