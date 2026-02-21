<?php

require 'dados.php';

$id = $_REQUEST['id'];
$filtrado = array_filter($livros, function ($item) use ($id) {
    return $item['id'] == $id;
});

$livro = array_pop($filtrado);

$view = "livro";
require "views/template/app.php";


?>

<!-- 
Model => carrega dados
View => interface
Controller => manipulação e fornecimento de dados para a view
-->