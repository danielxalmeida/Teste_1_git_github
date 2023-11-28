<body class="bg-dark bg-opacity-25 text-start mt-3 mx-auto">
    <header class="container-md">
        <div class="row">
            <div class="col-12 p-0">
                titulo
            </div>
            <div class="col-12 my-2 divisoria"></div>
            <div class="col p-0 link-sair">
                <a href="<?=$paginamain;?>.php">Fechar</a>
            </div>
            <div class="col-12 my-2 divisoria"></div>
        </div>
    </header>
    <main>
        <div class="container-md border border-black">
            <form action="mains/actualizar/atualizarredes.php" class="row">

                <div class="col-12 p-0">
                    <div class="row">
                        <div class="col-12">
                            <label for="instagram">instagram</label>
                            <input type="text" name="instagram" id="instagram" class="w-100" value="<?=getredes("instagram");?>" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label for="facebook">facebook</label>
                            <input type="text" name="facebook" id="facebook" class="w-100" value="<?=getredes("facebook");?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="linkedin">linkedin</label>
                            <input type="text" name="linkedin" id="linkedin" class="w-100" value="<?=getredes("linkedin");?>" required>
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