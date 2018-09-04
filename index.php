<?php
/**
 * Created by PhpStorm.
 * User: ddudnyk
 * Date: 9/3/2018
 * Time: 5:02 PM
 */

require_once ('Model.php');
require_once ('Controller.php');
require_once ('View.php');

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

echo $view->output();