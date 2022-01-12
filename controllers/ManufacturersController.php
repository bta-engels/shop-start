<?php
require_once 'controllers/Controller.php';

class ManufacturersController extends Controller 
{

    protected $modelClass = 'Manufacturers';

    public function index() 
    {
        $data = $this->model->all();
        if ( isset($_SESSION['auth']) ){
            require_once 'views/admin/manufacturers/index.php';

        } else {
            require_once 'views/public/manufacturers/index.php';
        }
    }

    public function show($id) 
    {
        $data = $this->model->one($id);
        require_once 'views/public/manufacturers/show.php';
    }
}
