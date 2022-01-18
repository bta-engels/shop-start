<?php
require_once 'models/Model.php';

class Pages extends Model {

    public function all() {
        $sql = "SELECT * FROM pages ORDER BY title";
        return $this->getAll($sql);
    }

    public function one(int $id) {
        $sql = "SELECT * FROM pages WHERE id=?";
        return $this->getOne($sql, [$id]);
    }
    
    public function delete($id) {
        return $this->remove('pages',$id);
    }
}