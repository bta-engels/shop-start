<?php
require_once 'models/Model.php';

class Manufacturers {

    public function all () {

        $sql= "SELECT CONCAT(firstname,' ', lastname) name FROM authors ORDER BY name";
        return $this->getAll($sql);
 
     }

}