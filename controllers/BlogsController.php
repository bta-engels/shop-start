<?php
require_once 'controllers/Controller.php';

class BlogsController extends Controller
{

    protected $modelClass = 'Blogs';

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
            $this->model->update('blogs', $params);
        } else {
            $params = [
                'title' => $_POST['title'],
                'body' => nl2br($_POST['body']),
            ];
            $this->model->insert('blogs', $params);
        }
        header('location: /blogs');
    }

    public function delete(int $id) {
        $this->model->delete($id);
        header('location: /blogs');
    }
}
