<?php

// function getTelefoneContactos(){
//     $r=selectSQLUnico("SELECT telefone FROM contactos WHERE id=1");
//     return $r["telefone"];
// }

function getContactos($detalhe){
    $r=selectSQLUnico("SELECT $detalhe FROM contactos WHERE id=1");
    return $r["$detalhe"];
}

function getredes($detalhe){
    $r=selectSQLUnico("SELECT $detalhe FROM redes WHERE id=1");
    return $r["$detalhe"];
}



?>