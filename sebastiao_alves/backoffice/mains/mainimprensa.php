    <main class="container my-5">
        <div class="row w-100 mx-2 bg-body-tertiary border border-1 border-light rounded-5">
            <div class="col-12 my-4 d-flex flex-column gap-2">
                <table>
                    <thead>
                        <th>ID</th>
                        <th>Imagem</th>
                        <th>titulo</th>
                        <th>data</th>
                        <th>texto</th>
                        <th>activo</th>
                        <th>posição</th>
                        <th>ações</th>
                    </thead>
                    <tbody>
                        <?php foreach (getTodosimprensa() as $l) : ?>
                            <tr>
                                <td><?= $l["id"]; ?></td>
                                <td class="p-3"><img src="<?= $l["imagem"]; ?>" alt="imagem_desktop" class="w-100"></td>
                                <td><?= $l["titulo"]; ?></td>
                                <td><?= $l["data"]; ?></td>
                                <td><?= substr($l["texto"], 0, 300) . "..."; ?></td>
                                <td><?= $l["activo"]; ?></td>
                                <td><?= $l["posicao"]; ?></td>
                                <!-- <td><?= $l["posicao"]; ?></td> -->

                                <td width=155px>
                                    <form action="imprensa_edit.php">
                                        <button name="editar" value="<?= $l["id"]; ?>" class="btn btn-outline-warning btn-sm iguais">editar</button>
                                    </form>
                                    <br><br>
                                    <form action="apaga/apagaimprensa.php">
                                        <button name="apagar" value="<?= $l["id"]; ?>" class="btn btn-outline-danger btn-sm iguais">apagar</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-12">
                <form action="adicionar/adicionarimprensa.php">
                    <button name="editar" value="-1" class="btn btn-secondary btn-sm">Nova postagem</button>
                </form>
            </div>
        </div>
    </main>