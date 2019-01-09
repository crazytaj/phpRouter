<?php

class Help extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->render('help');
        require_once './Models/help_model.php';
        $model = new Help_Model;
    }

}