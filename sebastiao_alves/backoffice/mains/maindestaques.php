    <main class="container my-5">
        <div class="row w-100 mx-2 bg-body-tertiary border border-1 border-light rounded-5">
            <div class="col-12 my-4 d-flex flex-column gap-2">
                <table>
                    <thead>
                        <th>ID</th>
                        <th>imagem</th>
                        <th>titulo</th>
                        <th>oBSERVAÇÃO</th>
                        <!-- <th>data actualização</th> -->
                        <th>ações</th>
                    </thead>
                    <tbody>
                        <?php foreach (getTodosDestaques() as $d) : ?>
                            <tr>
                                <td><?= $d["id"];?></td>
                                <td><img src="<?= getImagemLivro(intval($d["id_livros"]));?>" alt="capa"></td>
                                <td><?= getTituloLivro(intval($d["id_livros"]));?></td>
                                <td><?= $d["observacao"];?></td>
                                <td width=155px>
                                    <form action="destaques_edit.php">
                                        <button name="editar" value="<?= $d["id"]; ?>" class="btn btn-outline-warning btn-sm">editar</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
