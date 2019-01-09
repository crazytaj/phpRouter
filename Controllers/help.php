<?php

class Help extends Controller {

    function __construct() {
        parent::__construct();

    }

    function build() {
        require_once './Models/help_model.php';
        $model = new Help_Model;
        $this->view->render('help');

    }

    function bob() {
        require_once './Models/help_model.php';
        $model = new Help_Model;
        $this->view->render('help', FALSE);

    }

    public function e404() {

        $this->view->e404();

    }

}