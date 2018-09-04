<?php

/**
 * Created by PhpStorm.
 * User: ddudnyk
 * Date: 9/4/2018
 * Time: 3:39 PM
 */
class View
{
    private $model;
    private $controller;

    public function __construct($controller,$model)
    {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output(){
        return "<p>" . $this->model->string . "</p>";
    }

}