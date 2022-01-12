<?php
session_start();

require_once 'inc/header.php';
require_once 'inc/functions.php';

$controller = null;
$action = null;
$id = null;

if( isset($_GET['controller']) ) {
    // @todo: build router logic
    switch($_GET['controller']) 
    {
        case 'manufacturers':
            // ManufacturersController importieren und als $controller instanzieren
            require_once 'controllers/ManufacturersController.php';
            $controller = new ManufacturersController();
            break;
        case 'products':
            // ProductsController importieren und als $controller instanzieren
            require_once 'controllers/ProductsController.php';
            $controller = new ProductsController();
            break;
        case 'user':
            // UsersController importieren und als $controller instanzieren
            require_once 'controllers/UsersController.php';
            $controller = new UsersController();
            break;
    }
    // hier action abfragen
    if( isset($_GET['action']) && $controller && method_exists($controller, $_GET['action']) ) {
        $action = $_GET['action'];
        // checken ob es eine id gibt, die der funktion übergeben werden soll 
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $controller->$action($id);
        } else {
            $controller->$action();

        }
    }
} else {
    // zeige hier start seite
    require_once 'views/start.php';
}

require_once 'inc/footer.php';
?>
