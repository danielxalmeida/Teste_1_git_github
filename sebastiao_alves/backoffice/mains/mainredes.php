    <main class="container my-5">

        <div class="row w-100 mx-2 bg-body-tertiary border border-1 border-light rounded-5 d-flex justify-content-center">

            <div class="col-12 my-4 d-flex flex-column gap-2">
                <h3>Instagram</h3>
                <p><?= getredes("instagram"); ?></p>
            </div>
            <div class="col-11 border border-tertiary"></div>
            <div class="col-12 my-4 d-flex flex-column gap-2">
                <h3>Facebook</h3>
                <p><?= getredes("facebook"); ?></p>
            </div>
            <div class="col-11 border border-tertiary"></div>
            <div class="col-12 my-4 d-flex flex-column gap-2">
                <h3>Linkedin</h3>
                <p><?= getredes("linkedin"); ?></p>
            </div>
            <div class="col-11 border border-tertiary"></div>
            <div class="col-12 my-3">
                <a class="nav-link active" aria-current="page" href="redes_edit.php">
                    <button class="btn btn-secondary btn-sm">EDITAR REDES</button>
                </a>
            </div>
        </div>

    </main>