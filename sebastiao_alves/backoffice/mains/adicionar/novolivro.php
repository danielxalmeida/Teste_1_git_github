<?php

require_once("funcoes.php");

if (!estarLogado()) {
    header("Location: index.php");
    exit();
}

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
    
    iduSQL("INSERT INTO livros (titulo,observacao,activo,detalhes,posicao,imagem,texto) VALUES ('$titulo','$observacao','$activo','$detalhe','$posicao','$imagem','$txt')");

    header("Location: livros.php");
}



?>
