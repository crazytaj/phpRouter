<?php

class First extends Controller {

    function __construct() {
        parent::__construct();

    }

    public function build() {
        $this->view->render('./Views/first', TRUE);

    }

    public function e404() {

        $this->view->e404();

    }

public function subset($parameters = NULL) {
        $accepted_params = ['id'];
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
        if (isset($params[''])) unset($params['']);
        $this->view->render('./Views/first-subset',TRUE,$params);
    } }