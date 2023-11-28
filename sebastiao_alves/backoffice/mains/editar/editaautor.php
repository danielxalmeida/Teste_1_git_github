    <main>
        <div class="container-md border border-black">
        <div class="row">
            <div class="col-12 p-0">
                titulo
            </div>
            <div class="col-12 my-2 divisoria"></div>
            <div class="col p-0 link-sair">
                <a href="autor.php">Fechar</a>
            </div>
            <div class="col-12 my-2 divisoria"></div>
        </div>
            <form action="mains/actualizar/atualizarautor.php" class="row">

                <div class="col-12 p-0">
                    <div class="row">
                        <div class="col-12">
                            <label for="imagem">Link da imagem do autor na pagina Autor</label>
                            <input type="text" name="imagem" id="imagem" class="w-100" value="<?=getImagemAutor();?>" required>
                            <a href="../filemanager/tinyfilemanager.php" target="_top">
                                <button type="button">Gestor de ficheiros</button>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label for="txt">Texto do campo "Sobre o Autor":</label>
                            <textarea type="text" name="txt" id="txt" class="w-100" value="" required><?=getTextoAutor();?></textarea>
                            <script>
                                ClassicEditor
                                    .create(document.querySelector('#txt'))
                                    .catch(error => {
                                        console.error(error);
                                    });
                            </script>
                        </div>
                    </div>
                </div>
                <br>

                <div class="col-12 my-5 px-0">
                    <a href="autor.php">Fechar</a>
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