<?php

$uri = str_replace('/', '', $_SERVER['REQUEST_URI']);
$view = $uri?: 'index';


require "views/template/app.php";