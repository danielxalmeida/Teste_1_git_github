<?php

require_once("funcoes.php");

if (!estarLogado()) {
    header("Location: index.php");
    exit();
}

$form = isset($_GET["apagar"]);
if ($form) {
    $apagar = $_GET["apagar"];
    iduSQL("DELETE FROM carousel WHERE id='$apagar'");
    // logout();
    header("Location: carousel.php");
    exit();
}



?>