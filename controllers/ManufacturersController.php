<?php
require_once 'models/Manufacturers.php';

class ManufacturersController {
    
    public function index() 
    {
        $db = new Manufacturers;
        $data = $db->all();

        require_once 'views/public/manufacturers/index.php';
    }
}
