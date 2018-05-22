<?php

class GetPerson extends Model{

    private $result;

    function __construct() {
                parent::__construct();

    }
 public function ToDo($id) {
         if ((!$id)) {
            $msg = " you must be filled the id ! ";
           $this->error($msg);
            return $msg;
            
        } else {
            try{
       $this->result=$this->founderror($id);       
        if ($this->result == [])
            { $this->result=[];}
        return $this->result;
        } catch (Exception $ex) {
                $msg = " no get ,this Id not found !";
                $this->error($msg);
            }
        }
    }
    
}

  
