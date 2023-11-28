<?php

require_once("funcoes.php");

if (!estarLogado()) {
    header("Location: index.php");
    exit();
}

$form=isset($_GET["titulo"]) && isset($_GET["ativo"]) && isset($_GET["smai"]) && isset($_GET["txt"]) && isset($_GET["imgdesk"]) && isset($_GET["imgmob"]) && isset($_GET["destaque"]) ;
//  && isset($_GET["posicao"]);
// && isset($_GET["destaque"]) ;
// echo "1111";
if($form){
    echo "22222";
    $id=intval($_GET["editar"]);
    
    $titulo=$_GET["titulo"];
    $destaque=$_GET["destaque"];
    $activo=intval($_GET["ativo"]);
    $posicao=intval($_GET["posicao"]);
    $smai=$_GET["smai"];
    $txt=$_GET["txt"];
    $imgdesk=$_GET["imgdesk"];
    $imgmob=$_GET["imgmob"];
    
    // echo $id;
    iduSQL("INSERT INTO carousel (titulo,observacao,activo,link,subtitulo,imagem_desktop,imagem_mobile) VALUES ('$titulo','$destaque','$activo','$smai','$txt','$imgdesk','$imgmob')");

    header("Location: carousel.php");


    // iduSQL("UPDATE (titulo,observacao,activo,link,subtitulo,imagem_desktop,imagem_mobile) VALUES (titulo,observacao,activo,link,subtitulo,imagem_desktop,imagem_mobile) WHERE id='$id'");
}





?>
