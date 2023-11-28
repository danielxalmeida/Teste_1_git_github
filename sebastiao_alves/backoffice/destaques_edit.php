<?php

require_once("../requisitos.php");

require_once("requisitosbackoffice.php");
$paginamain="destaques";

$form = isset($_GET["editar"]);
if ($form) {
    $editar = intval($_GET["editar"]);
}else{
    header("Location: $pagina.php");
    exit();
}

// $dados = selectSQL("SELECT id,titulo FROM livros");




require("componentes/headerbackoffice.php");

require("mains/editar/edita$paginamain.php");

require("componentes/footerbackoffice.php");

?>