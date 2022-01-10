<?php
require_once 'inc/MyDB.php';

class Model extends MyDB {

    public function myQuery(string $query, array $options = null) {
        return $this->prepareAndExecute($query, $options);
    }

    public function insert(string $table, array $params) {
        $cols = array_keys($params);
        $placeholders = array_map(fn($col) => ':' . $col, $cols);
        $sql = "INSERT IGNORE INTO $table (" . implode(',', $cols) . ") VALUES (". implode(',', $placeholders) .")";
        return $this->myQuery($sql, $params);
    }
}
