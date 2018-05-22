<?php

class employees extends controller {

    function __construct() {
        parent::__construct();
        $this->_view->result="";
    }

    public function index() {
        $this->_view->today = date('d/m/Y');
        $this->_view->id = "";
        $this->_view->name = "";
    
        $this->_view->render('employees/index');
    }

    public function getAction() {
        //var_dump($_POST);
        extract($_POST);
        $empname= $this->test_input($empname);
        $this->loadModel($action);
        $this->_model->param = TRUE;
        $this->_view->id = $empid;
        $this->_view->name = $empname;
        $this->_view->result = $this->_model->ToDo($empid, $empname, $empdate);
        
        

        if ($this->_model->param === TRUE) {
            $this->_view->msg = "succesfully!";
            if (($action=='GetPerson')||($action=='GetAllPerson'))
            {$path = 'employees/' . $action;}
            else {$path='employees/index';}
            $this->_view->render($path);
        }
    }
    public function getlink() {
        $action='GetPerson';
        $empid=$this->a;
        $empname="";
        $empdate="";
        $this->loadModel($action);
        $this->_model->param = TRUE;
        $this->_view->result = $this->_model->ToDo($empid, $empname, $empdate);
        $this->_view->id = $empid;
        if ($this->_model->param === TRUE) {
            $this->_view->msg = "succesfully!";
           $this->_view->render('employees/GetPerson');
        }
    }

}
