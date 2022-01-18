<?php

class Controller {

    protected $model;
    protected $modelClass;
    protected $viewPath;

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

        $modelPath = strtolower($this->modelClass);

        if ( isset($_SESSION['auth']) ) {
            $this->viewPath = 'views/admin/'.$modelPath;
        } else {
            $this->viewPath = 'views/public/'.$modelPath;
        }
    }
}
