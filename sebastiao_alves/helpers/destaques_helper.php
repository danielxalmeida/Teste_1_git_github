<?php

function getTodosDestaques(){
    $r= selectSQL("SELECT * FROM destaques");
    return $r;
}
function getObservacaoDestaque($id){
    $r= selectSQLunico("SELECT observacao FROM destaques WHERE id='$id'");
    return $r["observacao"];
}

// function linkLivro($id){
//     $resultado= selectSQLUnico("SELECT imagem FROM livros WHERE id='$id'");
//     return $resultado["imagem"];
// }

?>