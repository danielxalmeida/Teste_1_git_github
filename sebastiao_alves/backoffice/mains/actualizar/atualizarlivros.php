<?php

require_once("../../../requisitos.php");
require_once("../../requisitosbackoffice.php");

$form=isset($_GET["titulo"]) && isset($_GET["ativo"]) && isset($_GET["detalhe"]) && isset($_GET["txt"]) && isset($_GET["imagem"]) && isset($_GET["observacao"]);

if($form){

    $id=intval($_GET["editar"]);
    
    $titulo=$_GET["titulo"];
    $observacao=$_GET["observacao"];
    $activo=intval($_GET["ativo"]);
    $posicao=intval($_GET["posicao"]);
    $detalhe=$_GET["detalhe"];
    $txt=$_GET["txt"];
    $imagem=$_GET["imagem"];
    
    iduSQL("UPDATE livros SET titulo='$titulo',observacao='$observacao',activo='$activo',detalhes='$detalhe',posicao='$posicao',imagem='$imagem',texto='$txt' WHERE id='$id'");
    header("Location: ../../livros.php");
}

?>