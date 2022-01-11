<?php
require_once 'models/Model.php';
;
class ManufacturersController {

    public function index() {
        $db = new Model;
        $sql = 'SELECT * FROM manufacturers ORDER BY name';
        $data = $db->getAll($sql);

        require_once 'views/public/manufacturers/index.php';
    }
}
