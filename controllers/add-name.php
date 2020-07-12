<?php


$users = $app['database']->selectAll('users');

$app['database']->insert('users', [
    'name' => $_POST['name']
]);


header('Location: /');