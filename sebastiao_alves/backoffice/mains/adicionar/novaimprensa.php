<?php

require_once("funcoes.php");

if (!estarLogado()) {
    header("Location: index.php");
    exit();
}

$form=isset($_GET["titulo"]) && isset($_GET["ativo"]) && isset($_GET["txt"]) && isset($_GET["imagem"]) && isset($_GET["data"]);

if($form){

    // $id=intval($_GET["editar"]);
    $titulo=$_GET["titulo"];
    $activo=intval($_GET["ativo"]);
    // $posicao=intval($_GET["posicao"]);
    $data=$_GET["data"];
    $txt=$_GET["txt"];
    $imagem=$_GET["imagem"];
    
    iduSQL("INSERT INTO imprensa (titulo,imagem,activo,data,texto) VALUES ('$titulo','$imagem','$activo','$data','$txt')");

    header("Location: imprensa.php");
}



?>
