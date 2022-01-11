<?php

require_once 'controllers/Controller.php';

class ProducsController extends Controller {

    protected $modelClass = 'Products';
    
    public function index() 
    {

        $data = $this->model->all();

        require_once 'views/public/products/index.php';
    }
}
