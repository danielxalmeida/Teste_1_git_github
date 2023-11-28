<?php

require_once("funcoes.php");

if (!estarLogado()) {
    header("Location: index.php");
    exit();
}

$form=isset($_GET["apagar"]);

if($form){
    $apagar=$_GET["apagar"];
    $carouselbd=selectSQLUnico("SELECT imagem_desktop FROM carousel WHERE id='$apagar'");

}

?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>
    <!-- Bootstrap 5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!-- Estilo BACKOFFICE -->
    <link rel="stylesheet" href="estilobackoffice.css">

</head>

<body class="bg-dark bg-opacity-25 text-start mt-3 mx-auto">
    <header class="container-md">
        <div class="row">
            <div class="col-12 p-0">
                titulo
            </div>
            <div class="col-12 my-2 divisoria"></div>
            <div class="col p-0 link-sair">
                <a href="carousel.php">Fechar</a>
            </div>
            <div class="col-12 my-2 divisoria"></div>
        </div>
    </header>

    <main class="container-md">
        <div class="col-12 p-0">
            <h3>Deseja apagar o carousel?</h3>
            <img src="<?= $carouselbd["imagem_desktop"];?>" alt="">
            <form action="apagaocarousel.php">
                <input type="hidden" name="apagar" value="<?= $apagar;?>">
                <button>sim</button>
            </form>
        </div>
    </main>
    <footer class="container-md">
        <div class="row">
            <div class="col-12 my-2 divisoria"></div>
            <div class="col p-0 link-sair">
                <a href="carousel.php">Fechar</a>
            </div>
            <div class="col-12 my-2 divisoria"></div>
        </div>
    </footer>
</body>

</html>