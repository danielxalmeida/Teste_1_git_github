    <main>
        <div class="container-md border border-black">
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
            <form action="mains/actualizar/atualizarcontactos.php" class="row">

                <div class="col-12 p-0">
                    <div class="row">
                        <div class="col-12">
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone" id="telefone" class="w-100" value="<?=getContactos("telefone");?>" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label for="email">email</label>
                            <input type="text" name="email" id="email" class="w-100" value="<?=getContactos("email");?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="morada">morada</label>
                            <input type="text" name="morada" id="morada" class="w-100" value="<?=getContactos("morada");?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="horario">horario</label>
                            <input type="text" name="horario" id="horario" class="w-100" value="<?=getContactos("horario");?>" required>
                        </div>
                    </div>
                </div>
                <br>

                <div class="col-12 my-5 px-0">
                    <a href="<?=$paginamain;?>.php">Fechar</a>
                    <button name="editar" class="botao-editar">Guardar</button>
                </div>
            </form>

        </div>
    </main>