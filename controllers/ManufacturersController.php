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
            $data['description'] = strip_tags($data['description']);
        }
        require_once $this->viewPath.'/edit.php';
    }

    public function store($id = null)
    {
        $params = [
            'name' => $_POST['name'],
            'description' => nl2br($_POST['description']),
        ];
        if ( $id ) {
            $params += ['id' => $id];
            $this->model->update($params);
        } else {
            $this->model->insert($params);
        }
        header('location: /manufacturers');
    }

    public function delete(int $id) {
        $this->model->delete($id);
        header('location: /manufacturers');
    }
}
