    <main>
        <div class="container-md border border-black">
            <form action="atualizarimprensa.php" class="row">

                <div class="col-12 d-flex justify-content-between flex-column gap-2 p-0">
                    <div class="row">
                        <div class="col-10">
                            <label for="titulo">
                                <span class="tt1">titulo:</span>
                                <span>(título do livro)</span>
                            </label>
                            <input type="text" name="titulo" id="titulo" class="w-100" value="<?=$dados["titulo"];?>" required>
                        </div>
                        <div class="col-10">
                            <label for="data">
                                <span class="tt1">data:</span>
                                <span>(Data de publicação)</span>
                            </label>
                            <input type="date" name="data" id="data" class="w-100" value="<?=$dados["data"];?>">
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
                                <option value="<?= intval($dados["id"]);?>"><?= $dados["id"];?></option>
                                <option value="0">Não</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-12 p-0">
                    <div class="row">
                        <div class="col-12">
                            <label for="txt">Texto</label>
                            <textarea type="text" name="txt" id="txt" class="w-100" required>
                            <?=$dados["texto"];?></textarea>
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
                            <input type="text" name="imagem" id="imagem" class="w-100" value="<?=$dados["imagem"];?>" required>
                            <a href="../filemanager/tinyfilemanager.php" target="_blank">
                                <button type="button">Gestor de ficheiros</button>
                            </a>
                        </div>
                    </div>

                </div>
                <br>

                <div class="col-12 my-5 px-0">
                    <a href="<?=$pagina;?>.php">Fechar</a>
                    <!-- <input type="submit" value="Guardar"> -->
                    <button name="editar" value="<?=$editar;?>" class="botao-editar">Guardar</button>
                </div>
            </form>

        </div>
    </main>