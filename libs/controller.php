<?php

class Controller {

    protected $_view;
    protected $_model;

    public function __construct() {
        $this->_view = new View();
    }

    public function loadModel($name) {
        $path = 'models/' . $name . '.php';
        if (file_exists($path)) {
            require_once $path;
            $modelName = $name ;  
            $this->_model = new $modelName();
        }
    }
    function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
}    