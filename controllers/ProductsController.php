<?php
require_once 'controllers/Controller.php';
require_once 'models/Manufacturers.php';

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
        $manufacturers = (new Manufacturers)->all();
        if ( $id ) {
            $data = $this->model->one($id);
            $data['description'] = str_replace('<br />',"\n", $data['description']);
        } 
        require_once $this->viewPath.'/edit.php';
    }

    public function store($id = null) 
    {   
        $params = [ 
            'name'              => $_POST['name'],
            'manufacturer_id'   => $_POST['manufacturer_id'],
            'description'       => nl2br($_POST['description']),
        ];
        if ( $id ) {   
            $params += ['id' => $id];
            $this->model->update('products', $params);
        } else {
            $this->model->insert('products', $params);
        }
        header('location: /products');
    }

    public function delete(int $id) {
        $this->model->delete($id);
        header('location: /products');
    }
}
