<?php
require_once 'controllers/Controller.php';

class ManufacturersController extends Controller 
{

    protected $modelClass = 'Manufacturers';

    public function index() 
    {
        $data = $this->model->all();

        require_once 'views/public/manufacturers/index.php';
    }
    public function show($id) 
    {
        $data = $this->model->one($id);

        require_once 'views/public/manufacturers/show.php';
    }
}
