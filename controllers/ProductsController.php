<?php
require_once 'controllers/Controller.php';

class ProductsController extends Controller
{
    protected $modelClass = 'Products';

    public function index()
    {
        $data = $this->model->all();
        if ( isset($_SESSION['auth'])) 
        {
            require_once 'views/admin/products/index.php';
        }else{
            require_once 'views/public/products/index.php';
        }
    }

    public function show($id) 
    {
        $data = $this->model->one($id);
        require_once 'views/public/products/show.php';
    }
}
