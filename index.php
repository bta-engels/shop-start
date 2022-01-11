<?php
require_once 'inc/header.php';
require_once 'inc/functions.php';


$controller = null;
$action = null;
$id = null;



// @todo: build router logic
if (isset($_GET['controller'])){
    switch ($_GET['controller']){
        case 'manufacturers':
            require_once 'controllers/ManufacturersController.php';
            $controller=new ManufacturersController();
            break;
        case 'products':
            require_once 'controllers/ProductsController.php';
            $controller=new ProductsController();
            break;
    }
    if ( isset($_GET['action']) && $controller && method_exists($controller,$_GET['action'])){
        $action = $_GET['action'];
        $controller->$action();
        }
}else{

}

d($_GET);
require_once 'inc/footer.php';
?>
