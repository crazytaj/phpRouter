<?php
class View {

    function __construct() {



    }

    public function render($name, $includeHeader = TRUE) {

        if ($includeHeader == TRUE) {

            require_once './Library/dbconnect.php';
            require_once './Views/header.php';
            require_once './Views/' . $name . '.php';
            require_once './Views/footer.php';

        } else {
            require_once './Library/dbconnect.php';
            require_once './Views/' . $name . '.php';

        }

    }

    public function e404() {

        require_once './Library/dbconnect.php';
        require_once './Views/header.php';
        require_once './Views/404.php';
        require_once './Views/footer.php';

    }

}