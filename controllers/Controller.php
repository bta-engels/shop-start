<?php

class Controller {

    protected $model;
    protected $modelClass;

    public function __construct()
    {
        if($this->modelClass) {
            require_once 'models/'.$this->modelClass . '.php';
            $this->model = new $this->modelClass();
        }
    }
}