<?php
require_once 'inc/header.php';
require_once 'inc/functions.php';

$controller = null;
$action = null;
$id = null;

// @todo: build router logic

//require_once 'views/public/manufacturers/index.php';
if( issset($_GET['controller'])) {
    // @todo: build router logic
    switch() {
        case 'manufacturers':

            break;
    }

} else {
    //zeige startseite

}

d($_GET);

//$controller = 'ManufacturersControler';
//$action = 'index';

require_once 'inc/footer.php';
?>
