<main>
    <div class="container-fluid main">
        <div class="row mb-3 justify-content-end">
            <div class="col-md-11 col-12 ms-5 px-3 caixa-menu shadow-menu" id="fixview">
                <div class="caixa-menu-selecionado caps ms-md-5 mx-4 mt-5">livros</div>
                <div class="sobre-mim t1 ms-md-5 mx-4 mt-2 pb-3"><?= getTituloLivro($id_livro); ?></div>
            </div>
        </div>
        <div class="row p-md-5 p-4 area-texto d-flex flex-column align-items-center">
            <div class="col-md-10 col-12 d-flex flex-column align-items-center gap-4">
                <div class="row">
                    <div class="col-md-5 col-12 text-center">
                        <img src="<?= getImagemLivro($id_livro); ?>" alt=" autor" class="imagem-livro w-100 h-auto">
                    </div>
                    <div class="col-md-7 col-12 texto-normal p1 ps-md-5">
                        <?= getTextoLivro($id_livro); ?>
                    </div>
                    <div class="col-12 texto-extra p1 text-start">
                        <?= getObservacaoLivro($id_livro); ?>
                    </div>
                </div>
                <div class="row my-4 align-self-end d-md-block d-none">
                    <div class="col-3 mt-5">
                        <button type="button" class="voltar p-0 m-0" onclick="voltAtras()"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>