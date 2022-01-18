<?php
require_once 'models/Model.php';

class Features extends Model {

    public function all() {
        $sql = "SELECT * FROM features ORDER BY title";
        return $this->getAll($sql);
    }

    public function one(int $id) {
        $sql = "SELECT * FROM features WHERE id=?";
        return $this->getOne($sql, [$id]);
    }
    
    public function delete($id) {
        return $this->remove('features',$id);
    }
}