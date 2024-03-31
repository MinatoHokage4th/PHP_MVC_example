<?php

class Controller
{
    public function __construct()
    {
        //echo "Called, Controller Constructor";
    }
    public function view($page, $data = [])
    {
        require_once '../app/views/' . $page . '.php';
    }
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}
