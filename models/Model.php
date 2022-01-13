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

    public function update(string $table, array $params) {
        $colValues = [];
        // kurze version:
        //$colValues = array_map(fn($col) => "$col = :$col", array_keys($params));
        // oder per foreach
        foreach(array_keys($params) as $col) {
            if($col !== 'id') {
                $colValues[] = "$col = :$col";
            }
        }
        $sql = "UPDATE $table SET ". implode(',', $colValues) . " WHERE id=:id";
        // d($sql);
        // d($params);
        // die();
        return $this->myQuery($sql, $params);
    }

    public function delete(string $table, int $id) {

        $sql = "DELETE FROM $table WHERE id = ?";
        return $this->myQuery($sql, [$id]);
    }


}
