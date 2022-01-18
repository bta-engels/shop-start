<?php
require_once 'models/Model.php';

class Categories extends Model {

    public function all() {
        $sql = "SELECT * FROM categories ORDER BY name";
        return $this->getAll($sql);
    }

    public function one(int $id) {
        $sql = "SELECT * FROM categories WHERE id=?";
        return $this->getOne($sql, [$id]);
    }
    
    public function delete($id) {
        return $this->remove('categories',$id);
    }
}