<?php
//autoloader
    function my_autoloader($class) {
        $filec = 'Controllers/' . $class . '.php';
        $filel = 'Library/' . $class . '.php';
        if (file_exists($filec)) {
            require_once $filec;
        } elseif (file_exists($filel)) {
            require_once $filel;
        }else {
            die('The file: ' . $class . ' does not exist inside of the Controllers folder <br> The file: ' . $class . ' does not exist inside of the Library folder');
        }
    }
    spl_autoload_register('my_autoloader');

if ($_GET['url'] == 'index.php') $url = ['index'];
else $url = explode ('/', rtrim($_GET['url'], '/'));
$length = sizeof($url);
$params = $url;
$param = NULL;
for ($i = $length - 1; $i > 1; $i = $i - 1) {
    $param .= $params[$i] . ',';
}
$param = rtrim($param, ',');
if ($param == '') {
    $param = NULL;
}
$controller = new $url[0] or die('Page Does Not Exist');
if (isset($url[1]) && $param !== NULL) $controller->{$url[1]}($param);
elseif (isset($url[1])) $controller->{$url[1]}();