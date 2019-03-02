<?php

class Pages extends Controller {

    function __construct() {
        parent::__construct();

    }

    function build() {
        require_once './Models/pages_model.php';
        $model = new Pages_Model;
        $this->view->render('./Views/pages', FALSE);

    }

    public function e404() {

        $this->view->e404();

    }

    public function edit($parameters = NULL) {
        //put in parameters here
        $accepted_params = ['page_id'];
        $params = array();
        for ($i = 0; $i < sizeof($accepted_params); $i++) {
            if (!isset($parameters[$i])) {
                break;
            }
            $arraytopush = array(
                $accepted_params[$i]    => $parameters[$i]
            );
            $params = array_merge($params, $arraytopush);
        }
        unset($params['']);
        require_once './Models/pages_model.php';
        $model = new Pages_Model;
        $this->view->render('./Views/pages-edit',FALSE,$params);
    }

    public function add() {

        require_once './Models/pages_model.php';
        $model = new Pages_Model;
        $this->view->render('./Views/pages-add',FALSE);

    }

}