<?php
require_once 'controllers/Controller.php';

class FeaturesController extends Controller
{
    protected $modelClass = 'Features';

    public function index()
    {
        $data = $this->model->all('title');
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
            $data['body'] = strip_tags($data['body']);
        }

        require_once $this->viewPath.'/edit.php';
    }

    public function store($id = null)
    {
        $params = [
            'title' => $_POST['title'],
            'body'  => nl2br($_POST['body']),
        ];
        if ( $id ) {
            $params += ['id' => $id];
            $this->model->update($params);
        } else {
            $this->model->insert($params);
        }
        header('location: /features');
    }

    public function delete(int $id) {
        $this->model->delete($id);
        header('location: /features');
    }
}
