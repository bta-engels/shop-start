<?php
require_once 'controllers/Controller.php';

class UsersController extends Controller
{
    protected $modelClass = 'Users';

    public function check()
    {
        if(isset($_POST['email'])) {
            $email      = $_POST['email'];
            $password   = $_POST['password'];
            $user       = $this->model->check($email, $password);
            // erstelle neue auth-session, wenn noch nicht existent
            $_SESSION['auth'] = [
                'id'    => $user['id'],
                'email' => $user['email'],
                'name'  => $user['name'],
            ];
            header('location: /home');
        }
    }

    public function logout()
    {
        session_destroy();
        header('location: /home');
    }

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
            'name'  => $_POST['name'],
            'email' => $_POST['email'],
            'password'  => $_POST['password'],
        ];

        if ( $id ) {
            $params += ['id' => $id];

            if('' === $params['password']) {
                unset($params['password']);
            } else {
                $params['password'] = md5($params['password']);
            }

            $this->model->update($params);
        } else {
            $this->model->insert($params);
        }
        header('location: /users');
    }

    public function delete(int $id) {
        $this->model->delete($id);
        header('location: /users');
    }
}
