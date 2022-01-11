<?php
require_once 'models/Manufacturers.php';

class ManufacturersController {
    public function index() {
        $db = new Manufacturers;
        $sql = 'SELECT * FROM manufacturers ORDER BY name';
        $data = $db->getAll($sql);

        require_once 'views/public/manufacturers/index.php';
    }
}
