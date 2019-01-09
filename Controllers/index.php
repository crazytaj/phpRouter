<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->render('index');
        require_once './Models/index_model.php';
        $model = new Index_Model;
    }
}