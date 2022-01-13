<?php
require_once 'controllers/Controller.php';
require_once 'models/Manufacturers.php';

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
        var_dump($id);
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
