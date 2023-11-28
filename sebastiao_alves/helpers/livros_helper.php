<?php

function getListaLivros(){
    $r= selectSQL("SELECT titulo,id,activo FROM livros ORDER BY titulo ASC");
    return $r;
}
function getTodosLivros(){
    $r= selectSQL("SELECT * FROM livros ORDER BY id ASC");
    return $r;
}

function getTituloLivro($id){
    $r= selectSQLunico("SELECT titulo FROM livros WHERE id='$id'");
    return $r["titulo"];
}
function getObservacaoLivro($id){
    $r= selectSQLunico("SELECT observacao FROM livros WHERE id='$id'");
    return $r["observacao"];
}
function getDetalhesLivro($id){
    $r= selectSQLunico("SELECT detalhes FROM livros WHERE id='$id'");
    return $r["detalhes"];
}

function getTextoLivro($id){
    $r= selectSQLunico("SELECT texto FROM livros WHERE id='$id'");
    return $r["texto"];
}
function getTextoAbreviadoLivro($id){
    $r= substr(getTextoLivro($id),0,175)."...";
    return $r;
}
function getImagemLivro($id){
    $r= selectSQLunico("SELECT imagem FROM livros WHERE id='$id'");
    return $r["imagem"];
}

?>