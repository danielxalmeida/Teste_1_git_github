<?php

function getTodosimprensa(){
    $r= selectSQL("SELECT * FROM imprensa");
    return $r;
}
function getDadosImprensa($id){
    $r= selectSQLunico("SELECT * FROM imprensa WHERE id='$id'");
    return $r;
}

?>