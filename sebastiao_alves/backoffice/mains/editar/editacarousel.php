    <main>
        <div class="container-md border border-black">
        <div class="row">
            <div class="col-12 p-0">
                titulo <?= $id;?>
            </div>
            <div class="col-12 my-2 divisoria"></div>
            <div class="col p-0 link-sair">
                <a href="carousel.php">Fechar</a>
            </div>
            <div class="col-12 my-2 divisoria"></div>
        </div>
            <form action="mains/actualizar/atualizarcarousel.php" class="row">

                <div class="col-12 d-flex justify-content-between flex-column gap-2 p-0">
                    <div class="row">
                        <div class="col-6">
                            <label for="titulo">
                                <span class="tt1">titulo:</span>
                                <span>(título da imagem do cabeçalho)</span>
                            </label>
                        </div>
                        <div class="col-6">
                            <label for="destaque">
                                <span class="tt1">destaque:</span>
                                <span>(destaque da imagem no cabeçalho)</span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" name="titulo" id="titulo" class="w-100" value="<?=getTituloCarousel($id);?>" required>
                        </div>
                        <div class="col-6">
                            <input type="text" name="destaque" id="destaque" class="w-100" value="<?=getObservacaoCarousel($id);?>">
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0">
                    <div class="row">
                        <div class="col-6">
                            <label for="act">
                                <span class="tt1">Activo:</span>
                                <span>*</span>
                            </label>
                        </div>
                        <div class="col-6">
                            <label for="pos">
                                <span class="tt1">posicao:</span>
                                <span>(posição no carousel)</span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <select name="ativo" id="act" class="w-100" required>
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <select name="posicao" id="pos" class="w-100" disabled required>
                                <option value="1">id</option>
                                <option value="0">Não</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="col-12 p-0">
                    <div class="row">
                        <div class="col-12">
                            <label for="smai">Saber Mais</label>
                            <input type="text" name="smai" id="smai" class="w-100" value="<?=getLinkCarousel($id);?>" required>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <label for="txt">texto</label>
                            <!-- <input type="text" name="txt" id="editor" class="w-100" value="<?=$dados["subtitulo"];?>" required> -->
                            <textarea type="text" name="txt" id="editor" class="w-100" value="?"><?=getTextoCarousel($id);?></textarea>
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
                            <label for="imgdesk">Imagem Desktop</label>
                            <input type="text" name="imgdesk" id="imgdesk" class="w-100" value="<?=getImagemDesktopCarousel($id);?>" required>
                            <br>
                            <a href="../filemanager/tinyfilemanager.php" target="_blank">
                                <button type="button">Gestor de ficheiros</button>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label for="imgmob">Imagem Mobile</label>
                            <input type="text" name="imgmob" id="imgmob" class="w-100" value="<?=getImagemMobileCarousel($id);?>" required>
                            <a href="../filemanager/tinyfilemanager.php" target="_blank">
                                <button type="button">Gestor de ficheiros</button>
                            </a>
                        </div>
                    </div>

                </div>
                <br>

                <div class="col-12 my-5 px-0">
                    <a href="carousel.php">Fechar</a>
                    <!-- <input type="submit" value="Guardar"> -->
                    <button name="editar" value="<?=$id;?>" class="botao-editar">Guardar</button>
                </div>
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
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>

</body>

</html>