<?php
require_once 'models/Model.php';

class Products extends Model {

    public function all() {
        $sql = "SELECT 
            p.id,
            p.name,
            p.description,
            m.name manufacturer_name,
            m.description manufacturer_description
        FROM products p 
        JOIN manufacturers m ON m.id = p.manufacturer_id ORDER BY name";

        return $this->getAll($sql);
    }

}