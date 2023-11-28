<main class="container my-5">
        <div class="row w-100 mx-2 bg-body-tertiary border border-1 border-light rounded-5">
            <div class="col-12 my-4 d-flex flex-column gap-2">
                <table class="table-carousel">
                    <thead class="text-uppercase">
                        <th>ID</th>
                        <th>Imagem Desktop</th>
                        <!-- <th>Imagem Mobile</th> -->
                        <th>titulo</th>
                        <th>Texto</th>
                        <th>Observação</th>
                        <th>Activo</th>
                        <th>ações</th>
                    </thead>
                    <tbody>
                        <?php foreach (getTodosCarousel() as $l) : ?>
                            <tr>
                                <td><?= $l["id"]; ?></td>
                                <td class="p-3"><img src="<?= $l["imagem_desktop"]; ?>" alt="imagem_desktop"></td>
                                <!-- <td><img src="<?= $l["imagem_mobile"]; ?>" alt="imagem_mobile"></td> -->
                                <td><?= $l["titulo"]; ?></td>
                                <td><?= $l["subtitulo"]; ?></td>
                                <td><?= $l["observacao"]; ?></td>
                                <td><?= ($l["activo"] == 1 ? "Sim" : "Não"); ?></td>
                                <td width=155px>
                                    <form action="carousel_edit.php">
                                        <button name="editar" value="<?= $l["id"]; ?>" class="btn btn-outline-warning btn-sm iguais">editar</button>
                                    </form>
                                    <br><br>
                                    <form action="apagacarousel.php">
                                        <button name="apagar" value="<?= $l["id"]; ?>" class="btn btn-outline-danger btn-sm iguais">apagar</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-12 my-3">
                <form action="adicionarcarousel.php">
                    <button name="editar" value="-1" class="btn btn-secondary btn-sm">Novo Slide</button>
                </form>
            </div>
        </div>
    </main>