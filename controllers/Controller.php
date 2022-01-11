<?php

class Controller {

    protected $model;
    protected $modelClass;

    /**
     * Constructor function
     * wird automatisch ausgeführt bei der Instanzierung der Klasse 
     */
    public function __construct()
    {
        if($this->modelClass) {
            require_once 'models/' . $this->modelClass . '.php';
            $this->model = new $this->modelClass();
        }
    }
}