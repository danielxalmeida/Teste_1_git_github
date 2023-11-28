    <main>
        <div class="container-md border border-black">
            <form action="mains/actualizar/atualizardestaques.php" class="row">
                <div class="col-12 p-0">
                    <div class="row">
                        <div class="col-5">
                            <label for="livro">
                                <span class="tt1">Livro:</span>
                                <span>*</span>
                            </label>
                            <select name="livro" id="livro" class="w-100" required>
                                <?php foreach(getTodosLivros() as $d): ?>
                                    <!-- Falta aqui o pre-seleccionado! ver aula de 10/11 - não vi porque estive a resolver o xampp -->
                                    <option value="<?= $d["id"]; ?>"><?= getTituloLivro($d["id"]); ?></option>
                                    <?php endforeach;?>
                            </select>
                        </div>
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
                        <div class="col-10">
                            <label for="informacao">
                                <span class="tt1">informação:</span>
                                <span>*</span>
                            </label>
                            <input type="text" name="info" class="w-100" placeholder="Destacar" value="<?= getObservacaoDestaque($editar); ?>"> 

                            <!-- falta aqui o link para o destaques - um GETTER!!!  HELPER -->
                        </div>
                    </div>
                </div>
                <br>

                <div class="col-12 my-5 px-0">
                    <a href="<?= $paginamain; ?>.php">Fechar</a>
                    <button name="editar" value="<?= $editar; ?>" class="botao-editar">Guardar</button>
                </div>
            </form>

        </div>
    </main>