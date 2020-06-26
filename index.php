<?php

$database = require 'bootstrap.php';

$users = $database->selectAll('users');


require 'index.view.php';
