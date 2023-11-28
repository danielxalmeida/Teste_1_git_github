<?php

require_once("requisitos.php");

$paginamain="livros";

$id_livro=intval($_GET["livro"]);
// echo $id_livro;

require("componentes/header.php");

require("main/main$paginamain.php");

require("componentes/footer.php");

?>