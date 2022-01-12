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
}
