<?php
require_once 'inc/MyDB.php';

abstract class Model extends MyDB {

    protected $table;

    public function myQuery(string $query, array $options = null) {
        return $this->prepareAndExecute($query, $options);
    }

    public function all($orderBy = 'name') {
        $sql = "SELECT * FROM $this->table ORDER BY $orderBy";
        return $this->getAll($sql);
    }

    public function one(int $id) {
        $sql = "SELECT * FROM $this->table WHERE id=?";
        return $this->getOne($sql, [$id]);
    }

    public function insert(array $params) {
        $cols = array_keys($params);
        $placeholders = array_map(fn($col) => ':' . $col, $cols);
        $sql = "INSERT IGNORE INTO $this->table (" . implode(',', $cols) . ") VALUES (". implode(',', $placeholders) .")";
        return $this->myQuery($sql, $params);
    }

    public function update(array $params) {
        $colValues = [];
        // kurze version:
        //$colValues = array_map(fn($col) => "$col = :$col", array_keys($params));
        // oder per foreach
        foreach(array_keys($params) as $col) {
            if($col !== 'id') {
                $colValues[] = "$col = :$col";
            }
        }
        $sql = "UPDATE $this->table SET ". implode(',', $colValues) . " WHERE id=:id";
        return $this->myQuery($sql, $params);
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        return $this->myQuery($sql, [$id]);
    }
}
