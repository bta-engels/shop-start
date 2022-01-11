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
            $manu=new ManufacturersController();
            echo $manu->index();
            break;
        case 'products':
            require_once 'controllers/ProductsController.php';
            break;
    }
}else{

}

d($_GET);
require_once 'inc/footer.php';
?>
