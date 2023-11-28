    <main class="container my-5">

        <div class="row w-100 mx-2 bg-body-tertiary border border-1 border-light rounded-5 d-flex justify-content-center">

            <div class="col-4 my-4 d-flex flex-column gap-2">
                <h3>Imagem do Autor na Página (<?= $paginamain; ?>)</h3>
                <img src="<?= getImagemHome(); ?>" alt="">
            </div>
            <div class="col-11 border border-tertiary"></div>
            <div class="col-12 my-4 d-flex flex-column gap-2">
                <h3>Texto da area "Bem-Vindos" da página (<?= $paginamain; ?>)</h3>
                <p>
                    <?= getTextoAutorHome(); ?>
                </p>
            </div>
            <div class="col-11 border border-tertiary"></div>
            <div class="col-12 my-4 d-flex flex-column gap-2">
                <h3>Link do botão "SABER MAIS" (<?= $paginamain; ?>)</h3>
                <p>
                    <?= getLinkHome(); ?>
                </p>
            </div><div class="col-11 border border-tertiary"></div>
            <div class="col-12 my-4 d-flex flex-column gap-2">
                <h3>Texto do "Últimos livros" da página (<?= $paginamain; ?>)</h3>
                <p>
                    <?= getTextoUltimosLivrosHome(); ?>
                </p>
            </div>
            <div class="col-11 border border-tertiary"></div>
            <div class="col-12 my-3">
                <a class="nav-link" aria-current="page" href="">
                    <form action="home_edit.php">
                        <button class="btn btn-secondary btn-sm">EDITAR HOME</button>
                    </form>
                </a>
            </div>
        </div>

    </main>