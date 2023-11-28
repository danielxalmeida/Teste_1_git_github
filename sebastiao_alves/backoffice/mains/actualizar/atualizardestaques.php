<?php

require_once("../../../requisitos.php");
require_once("../../requisitosbackoffice.php");

$form=isset($_GET["livro"]) && isset($_GET["ativo"]) && isset($_GET["info"]);

if($form){

    $id=intval($_GET["editar"]);
    
    $livro=$_GET["livro"];
    $ativo=$_GET["ativo"];
    $info=$_GET["info"];
  
    // echo $id;
    iduSQL("UPDATE destaques SET id_livros='$livro',activo='$ativo',observacao='$info' WHERE id='$id'");

    header("Location: ../../destaques.php");
    exit();

    // iduSQL("UPDATE (titulo,observacao,activo,link,subtitulo,imagem_desktop,imagem_mobile) VALUES (titulo,observacao,activo,link,subtitulo,imagem_desktop,imagem_mobile) WHERE id='$id'");
}





?>
