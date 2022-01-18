<?php
require_once 'models/Model.php';

class Blogs extends Model {

    public function all() {
        $sql = "SELECT * FROM blogs ORDER BY title";
        return $this->getAll($sql);
    }

    public function one(int $id) {
        $sql = "SELECT * FROM blogs WHERE id=?";
        return $this->getOne($sql, [$id]);
    }
    
    public function delete($id) {
        return $this->remove('blogs',$id);
    }
}