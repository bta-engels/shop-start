<?php
require_once 'models/Model.php';

class Users extends Model {

    protected $table = 'users';

    public function check(string $email, string $password)
    {
        $sql = "SELECT id,name,email FROM $this->table WHERE email=? AND password=?";
        return $this->getOne($sql, [$email, md5($password)]);
    }
}
