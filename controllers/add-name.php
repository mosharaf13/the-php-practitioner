<?php


var_dump($_POST);
$users = $app['database']->selectAll('users');

require 'views/names.view.php';
