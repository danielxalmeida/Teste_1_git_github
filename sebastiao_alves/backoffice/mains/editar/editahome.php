<main>

    <div class="container-md border border-black">
        <div class="row">
            <div class="col-12 p-0">
                <h1><?= $paginamain; ?></h1>
            </div>
            <div class="col-12 my-2 divisoria"></div>
            <div class="col p-0 link-sair">
                <a href="home.php">Fechar</a>
            </div>
            <div class="col-12 my-2 divisoria"></div>
        </div>
        <form action="mains/actualizar/atualizarhome.php" class="row">

            <div class="col-12 p-0">
                <div class="row">
                    <div class="col-12">
                        <label for="imagem">Link da imagem do autor na pagina Home</label>
                        <input type="text" name="imagem" id="imagem" class="w-100" value="<?= getImagemHome(); ?>" required>
                        <br>
                        <a href="../filemanager/tinyfilemanager.php" target="_blank">
                            <button type="button">Gestor de ficheiros</button>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="txt_bem">Texto do campo "Bem-Vindos":</label>
                        <textarea type="text" name="txt_bem" id="txt_bem" class="w-100" rows="7" required><?= getTextoAutorHome(); ?></textarea>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#txt_bem'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="link">Link do botão SABER MAIS</label>
                        <input type="text" name="link" id="link" class="w-100" value="<?= getLinkHome(); ?>" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="txt_livros">Texto do campo "Últimos Livros":</label>
                        <textarea type="text" name="txt_livros" id="txt_livros" class="w-100" rows="7" required><?= getTextoUltimosLivrosHome(); ?></textarea>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#txt_livros'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                    </div>
                </div>
            </div>
            <br>

            <div class="col-12 my-5 px-0">
                <a href="home.php">Fechar</a>
                <button name="editar" class="botao-editar">Guardar</button>
            </div>
        </form>

    </div>
</main>
<footer class="container-md">
    <div class="row">
        <div class="col-12 my-2 divisoria"></div>
        <div class="col p-0 link-sair">
            <a href="home.php">Fechar</a>
        </div>
        <div class="col-12 my-2 divisoria"></div>
    </div>
</footer>
</body>

</html>