<?php
require_once 'inc/header.php';
require_once 'inc/functions.php';

$controller = null;
$action = null;
$id = null;

if( isset($_GET['controller']) ) {
    // @todo: build router logic
    switch($_GET['controller']) {
        case 'manufacturers':
            // ManufacturersController importieren und als $controller instanzieren
            break;
    }
    // hier action abfragen
} else {
    // zeige hier start seite
}

require_once 'inc/footer.php';
?>
