<?php

/**
 * Created by PhpStorm.
 * User: ddudnyk
 * Date: 9/4/2018
 * Time: 3:40 PM
 */
class Controller
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }
}