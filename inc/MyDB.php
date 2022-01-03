<?php
require_once 'config/db.php';

/**
 * Class MyDB
 */
class MyDB extends PDO {

    protected $outputFormat = PDO::FETCH_ASSOC;

    /**
     * MyDB constructor.
     * wird bei jeder instanzierung der Klasse als Objekt ausgeführt
     */
    public function __construct() {
        // DSN: data source name
        $dsn     = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND    => 'SET NAMES utf8',
            PDO::ATTR_DEFAULT_FETCH_MODE    => $this->outputFormat,
            PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
        ];
        parent::__construct($dsn, DB_USERNAME, DB_PASSWORD, $options);
    }
    /**
     * getAll function
     *
     * @param string $query
     * @param array|null $options
     * @return array|null
     */
    public function getAll(string $query, array $options = null) {
        $stmt = $this->prepareAndExecute($query, $options);
        return $stmt->fetchAll();
    }

    /**
     * getOne function
     *
     * @param string $query
     * @param array|null $options
     * @return array|null
     */
    public function getOne(string $query, array $options = null) {
        $stmt = $this->prepareAndExecute($query, $options);
        return $stmt->fetch();
    }

    /**
     * prepareAndExecute function
     *
     * @param string $query
     * @param array|null $options
     * @return mixed
     */
    protected function prepareAndExecute(string $query, array $options = null) {
        $stmt = $this->prepare($query);
        $stmt->execute($options);
        return $stmt;
    }

}
?>
