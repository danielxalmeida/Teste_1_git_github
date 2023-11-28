<?php

// function verifica(){

// }

function utilizador(){
    $utilizador=$_SESSION["utilizador"];
    return $utilizador;
}
// function dataAcesso($id){
//     $data=selectSQL("SELECT * FROM acessos WHERE id_utilizador='$id'");
//     return $data;
// }
function getNomeUtilizadorInicio($id){
    $data=selectSQL("SELECT nome FROM utilizador WHERE id='$id'");
    return $data;
}
function getultimoUtilizadorInicio($id){
    $data=selectSQL("SELECT ultimo FROM acessos WHERE id='$id'");
    return $data;
}
?>