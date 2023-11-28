<?php

require_once("funcoes.php");

if (!estarLogado()) {
    header("Location: index.php");
    exit();
}

$form=isset($_GET["titulo"]) && isset($_GET["ativo"]) && isset($_GET["data"]) && isset($_GET["txt"]) && isset($_GET["imagem"]);
//  && isset($_GET["posicao"]);
// && isset($_GET["destaque"]) ;
// echo "1111";
if($form){
    // echo "22222";
    $id=intval($_GET["editar"]);
    
    $titulo=$_GET["titulo"];
    $data=$_GET["data"];
    $activo=intval($_GET["ativo"]);
    // $posicao=intval($_GET["posicao"]);
    // $detalhe=$_GET["detalhe"];
    $txt=$_GET["txt"];
    $imagem=$_GET["imagem"];
    
    // echo $id;
    iduSQL("UPDATE imprensa SET titulo='$titulo',data='$data',activo='$activo',imagem='$imagem',texto='$txt' WHERE id='$id'");

    header("Location: imprensa.php");


    // iduSQL("UPDATE (titulo,observacao,activo,link,subtitulo,imagem_desktop,imagem_mobile) VALUES (titulo,observacao,activo,link,subtitulo,imagem_desktop,imagem_mobile) WHERE id='$id'");
}





?>
