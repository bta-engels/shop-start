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
        if ( $id )
        {
            $data = $this->model->one($id);
        } 
        require_once $this->viewPath.'/edit.php';
    }

    public function store($id=null) 
    {   
        if ( $id )
        {   
            $params = [ 
                'id' => $id,
                'name' => $_POST['name'],
                'description' => nl2br($_POST['description']),
            ];
            $this->model->update('manufacturers',$params);
        } else {
            $params = [ 
                'name' => $_POST['name'],
                'description' => nl2br($_POST['description']),
            ];
            $this->model->insert('manufacturers',$params);
        }
        header('location:/manufacturers');
    }
}
