<?php
require_once 'models/Products.php';
class ProductsController {
    public function index(){
        $db = new Products;
        $data = $db->all();
        require_once 'views/public/products/index.php';
    }
}
