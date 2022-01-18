<?php
require_once 'models/Model.php';

class Products extends Model {

    protected $table = 'products';

    public function all($orderBy = 'name') {
        $sql = "SELECT 
            p.id,
            p.name,
            p.description,
            p.manufacturer_id, 
            c.id category_id,
            c.name category_name,
            m.name manufacturer_name,
            m.description manufacturer_description
        FROM $this->table p 
        JOIN manufacturers m ON m.id = p.manufacturer_id
        JOIN categories c ON c.id = p.category_id 
        ORDER BY name
        ";

        return $this->getAll($sql);
    }

    public function one($id) {
        $sql = "SELECT 
            p.id,
            p.name,
            p.description,
            p.manufacturer_id, 
            c.id category_id,
            c.name category_name,
            m.name manufacturer_name,
            m.description manufacturer_description
        FROM $this->table p 
        JOIN manufacturers m ON m.id = p.manufacturer_id
        JOIN categories c ON c.id = p.category_id 
        WHERE p.id = ?";

        return $this->getOne($sql, [$id]);
    }
}
