<?php

$form = isset($_POST["atual"]) && isset($_POST["nova"]) && isset($_POST["confirma"]);

$erro = 0;
if ($form) {
    $npass = $_POST["nova"];
    $cpass = $_POST["confirma"];

    if ($npass == $cpass) {
        $user = $utilizador["username"];
        $id = $utilizador["id"];
        $pass = $_POST["atual"];

        $utilizador = verificaLoginPass2($user, $pass);

        if (!empty($utilizador)) {

            $cpass = password_hash($cpass, PASSWORD_DEFAULT);

            iduSQL("UPDATE utilizador SET password='$cpass' WHERE id='$id'");

            date_default_timezone_set("Europe/Lisbon");
            $data_atual = date("H:i:s - d/m/Y");
            $id = $utilizador["id"];
            iduSQL("UPDATE utilizador SET ultimo='$data_atual' WHERE id='$id'");
            iduSQL("INSERT INTO acessos (id_utilizador,data) VALUES ('$id','$data_atual')");
            $erro=2;
        } else {
            $erro = 1;
        }
    } else {
        $erro = 1;
    }
}

?>
<main class="container my-5">
    <div class="row w-100 mx-2 bg-body-tertiary border border-1 border-light rounded-5 d-flex justify-content-center">

        <div class="col-12 my-4 d-flex flex-column gap-2">
            <?= $erro==2 ? "" : "<h3>Alterar Senha de acesso</h3>"; ?>  
            <?= $erro==1 ? "<h1>DADOS ERRADOS!!</h1>" : ""?>

            <?php if($erro == 2) : ?>
                <h1>Password alterada com Sucesso.</h1>

            <?php else:?>
                <form action="" method="POST" autocomplete="off">
                <input type="password" name="atual" placeholder="Senha atual" required>
                <br><br>
                <input type="password" name="nova" placeholder="Nova Senha" required>
                <br><br>
                <input type="password" name="confirma" placeholder="Digite a Nova Senha novamente" required>
                <br><br>
                <input type="submit" value="Confimar Alteração">
            </form>
            <?php endif; ?>
        </div>
    </div>

</main>