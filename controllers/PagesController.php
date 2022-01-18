<?php
require_once 'controllers/Controller.php';

class PagesController extends Controller
{

    protected $modelClass = 'Pages';

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
            $data['body'] = str_replace('<br />',"\n", $data['body']);
        }
        require_once $this->viewPath.'/edit.php';
    }

    public function store($id = null)
    {
        if ( $id ) {
            $params = [
                'id' => $id,
                'title' => $_POST['title'],
                'body' => nl2br($_POST['body']),
            ];
            $this->model->update('pages', $params);
        } else {
            $params = [
                'title' => $_POST['title'],
                'body' => nl2br($_POST['body']),
            ];
            $this->model->insert('pages', $params);
        }
        header('location: /pages');
    }

    public function delete(int $id) {
        $this->model->delete($id);
        header('location: /pages');
    }
}
