<?php
require_once 'models/Products.php';

class ProductsController {

        public function index() {
            $db = new Model;
            $sql = 'SELECT * FROM products ORDER BY name';
            $data = $db->getAll($sql);
    
            require_once 'views/public/products/index.php';
        }
}