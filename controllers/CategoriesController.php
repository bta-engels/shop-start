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
        if ( $id ) {
            $params = [
                'id' => $id,
                'name' => $_POST['name'],
            ];
            $this->model->update('categories', $params);
        } else {
            $params = [
                'name' => $_POST['name']
            ];
            $this->model->insert('categories', $params);
        }
        header('location: /categories');
    }

    public function delete(int $id) {
        $this->model->delete($id);
        header('location: /categories');
    }
}
