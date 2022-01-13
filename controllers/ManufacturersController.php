<?php
require_once 'controllers/Controller.php';

class ManufacturersController extends Controller 
{

    protected $modelClass = 'Manufacturers';

    public function index() 
    {
        $data = $this->model->all();
        require_once $this->viewPath.'/index.php';
    }

    public function show($id) 
    {
        $data = $this->model->one($id);
        require_once $this->viewPath.'/show.php';
    }

    public function edit($id = null) 
    {
        $data = null;
        if ( $id ) {
            $data = $this->model->one($id);
        } 
        require_once $this->viewPath.'/edit.php';
    }
// http://shop-start.loc/manufacturers/store%3Cbr%20/%3E%3Cb%3EWarning%3C/b%3E:%20%20Trying%20to%20access%20array%20offset%20on%20value%20of%20type%20null%20in%20%3Cb%3E/Applications/XAMPP/xamppfiles/htdocs/shop-start/views/admin/manufacturers/edit.php%3C/b%3E%20on%20line%20%3Cb%3E6%3C/b%3E%3Cbr%20/%3E/
    public function store($id = null) 
    {   
        if ( $id ) {   
            $params = [ 
                'id' => $id,
                'name' => $_POST['name'],
                'description' => nl2br($_POST['description']),
            ];
            $this->model->update('manufacturers', $params);
        } else {
            $params = [ 
                'name' => $_POST['name'],
                'description' => nl2br($_POST['description']),
            ];
            $this->model->insert('manufacturers', $params);
        }
        header('location: /manufacturers');
    }
}
