<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();

    }

    function build() {
        require_once './Models/index_model.php';
        $model = new Index_Model;
        $this->view->render('./Views/index', FALSE);

    }

    public function e404() {

        $this->view->e404();

    }

}