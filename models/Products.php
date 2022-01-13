<?php
require_once 'models/Model.php';

class Products extends Model {

    public function all() {
        $sql = "SELECT 
            p.manufacturer_id,
            p.id,
            p.name,
            p.description,
            p.manufacturer_id, 
            m.name manufacturer_name,
            m.description manufacturer_description
        FROM products p 
        JOIN manufacturers m ON m.id = p.manufacturer_id ORDER BY name";

        return $this->getAll($sql);
    }

    public function one($id) {
        $sql = "SELECT 
            p.manufacturer_id,
            p.id,
            p.name,
            p.description,
            p.manufacturer_id, 
            m.name manufacturer_name,
            m.description manufacturer_description
        FROM products p 
        JOIN manufacturers m ON m.id = p.manufacturer_id
        WHERE p.id = ?";

        return $this->getOne($sql, [$id]);
    }

    public function delete($id) {
        return $this->remove('products', $id);
    }

}