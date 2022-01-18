<?php
require_once 'controllers/Controller.php';

class CategoriesController extends Controller
{

    protected $modelClass = 'Categories';

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
        if ( $id ) {
            $data = $this->model->one($id);
        }
        require_once $this->viewPath.'/edit.php';
    }

    public function store($id = null)
    {
        $params = [
            'name' => $_POST['name'],
        ];
        if ( $id ) {
            $params += ['id' => $id];
            $this->model->update($params);
        } else {
            $this->model->insert($params);
        }
        header('location: /categories');
    }

    public function delete(int $id) {
        $this->model->delete($id);
        header('location: /categories');
    }
}
