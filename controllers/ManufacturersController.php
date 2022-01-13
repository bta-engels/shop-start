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
        require_once $this->viewPath.'/edit.php';
    }
    public function store($id = null) 
    {
        $params=
        if ($id)
        {
            $data = $this->model->update($id,$params);
        }
        
        
        
        
        require_once $this->viewPath.'/store.php';
    }




}
