<?php
require_once 'controllers/Controller.php';
require_once 'models/Manufacturers.php';
require_once 'models/Categories.php';

class ProductsController extends Controller
{
    protected $modelClass = 'Products';

    public function index()
    {
        $data = $this->model->all();
        require_once $this->viewPath.'/index.php';
    }

    public function show(int $id)
    {
        $data = $this->model->one($id);
        require_once $this->viewPath.'/show.php';
    }

    public function edit($id = null)
    {
        $data = null;
        $manufacturers = (new Manufacturers)->all();
        $categories = (new Categories)->all();

        if ( $id ) {
            $data = $this->model->one($id);
            $data['description'] = strip_tags($data['description']);
        }

        require_once $this->viewPath.'/edit.php';
    }

    public function store($id = null)
    {
        $params = [
            'name'              => $_POST['name'],
            'manufacturer_id'   => $_POST['manufacturer_id'],
            'category_id'       => $_POST['category_id'],
            'description'       => nl2br($_POST['description']),
        ];
        if ( $id ) {
            $params += ['id' => $id];
            $this->model->update($params);
        } else {
            $this->model->insert($params);
        }
        header('location: /products');
    }

    public function delete(int $id) {
        $this->model->delete($id);
        header('location: /products');
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
