<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();

    }

    function build() {
        $this->view->render('index');
        require_once './Models/index_model.php';
        $model = new Index_Model;

    }

    public function e404() {

        $this->view->e404();

    }

}