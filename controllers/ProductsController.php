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

    public function edit($id = null) 
    {
        $data = null;
        if ( $id ) {
            $data = $this->model->one($id);
            $data['name'] = str_replace('<br />',"\n", $data['name']);
            $data['manufacturer_name'] = str_replace('<br />',"\n", $data['manufacturer_name']);
            $data['description'] = str_replace('<br />',"\n", $data['description']);
        } 
        require_once $this->viewPath.'/edit.php';
    }

    public function store($id = null) 
    {   
        if ( $id ) {   
            $params = [ 
                'id' => $id,
                'name' => $_POST['name'],
                'manufacturer_name' => $_POST['manufacturer_name'],
                'description' => nl2br($_POST['description']),
            ];
            $this->model->update('products', $params);
        } else {
            $params = [ 
                'name' => $_POST['name'],
                'manufacturer_name' => $_POST['manufacturer_name'],
                'description' => nl2br($_POST['description']),
            ];
            $this->model->insert('products', $params);
        }
        header('location: /products');
    }

    public function delete(int $id) {
        $this->model->delete($id);
        header('location: /products');
    }




}
