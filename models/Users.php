<?php
require_once 'models/Model.php';

class Users extends Model {

    public function check(string $email, string $password) 
    {
        $sql = "SELECT * FROM users WHERE email=? AND password=?";
        return $this->getOne($sql, [$email, md5($password)]);
    }
}