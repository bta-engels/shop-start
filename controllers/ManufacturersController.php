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
        $this->model->update('manufacturers', $data);
        require_once $this->viewPath.'/show.php';
    }
}
