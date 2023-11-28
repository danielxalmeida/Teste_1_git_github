<?php
require_once("funcoes.php");

if (!estarLogado()) {
    header("Location: index.php");
    exit();
}
$pagina="imprensa";
// else {
//     $utilizador = $_SESSION["utilizador"];
//     $id = $utilizador["id"];
//     $data = selectSQL("SELECT * FROM acessos WHERE id_utilizador='$id'");
// }

// $form=isset($_GET["editar"]);

// if($form){
//     $editar=intval($_GET["editar"]);
//     echo $editar;
//     if($editar>0){
//         $dados=selectSQLUnico("SELECT * FROM carousel WHERE id='$editar'");
//     }
// }


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
                <!-- CK EDITOR -->
                <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

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
                <a href="<?=$pagina;?>.php">Fechar</a>
            </div>
            <div class="col-12 my-2 divisoria"></div>
        </div>
    </header>
    <main>
        <div class="container-md border border-black">
            <form action="novaimprensa.php" class="row">

                <div class="col-12 d-flex justify-content-between flex-column gap-2 p-0">
                    <div class="row">
                        <div class="col-10">
                            <label for="titulo">
                                <span class="tt1">titulo:</span>
                                <span>(título da noticia)</span>
                            </label>
                            <input type="text" name="titulo" id="titulo" class="w-100" placeholder="Titulo" required>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0">
                    <div class="row">
                        <div class="col-5">
                            <label for="act">
                                <span class="tt1">Activo:</span>
                                <span>*</span>
                            </label>
                            <select name="ativo" id="act" class="w-100" required>
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                        </div>
                        <div class="col-5">
                            <label for="posicao">
                                <span class="tt1">posicao:</span>
                                <span>(posição no carousel)</span>
                            </label>
                            <select name="posicao" id="posicao" class="w-100" disabled required>
                                <option value="">id</option>
                                <option value="">Não</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0">
                    <div class="row">
                        <div class="col-12">
                            <label for="txt">Texto</label>
                            <textarea type="text" name="txt" id="txt" class="w-100" required placeholder="Texto"></textarea>
                            <script>
                                ClassicEditor
                                    .create(document.querySelector('#txt'))
                                    .catch(error => {
                                        console.error(error);
                                    });
                            </script>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="imagem">Imagem</label>
                            <input type="text" name="imagem" id="imagem" class="w-100" placeholder="Imagem" required>
                            <br>
                            <a href="../filemanager/tinyfilemanager.php" target="_blank">
                                <button type="button">Gestor de ficheiros</button>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="data">Data de Publicação</label>
                            <input type="text" name="data" id="ata" class="w-100" placeholder="data" required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-12 my-5 px-0">
                    <a href="<?=$pagina;?>.php">Fechar</a>
                    <button name="editar" class="botao-editar">Guardar</button>
                </div>
            </form>
        </div>
    </main>
    <footer class="container-md">
        <div class="row">
            <div class="col-12 my-2 divisoria"></div>
            <div class="col p-0 link-sair">
                <a href="<?=$pagina;?>.php">Fechar</a>
            </div>
            <div class="col-12 my-2 divisoria"></div>
        </div>
    </footer>
</body>

</html>