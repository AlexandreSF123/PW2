<?php include 'header.php';?>
<?php include 'usuario.php'; ?>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-8 col-xl-6 col-xxl-4">
                
                <div class="card bg-light shadow my-5">
                    <img src="https://lh3.googleusercontent.com/w5K3Dsq7NU1xrFy_hDghZwFMqA5t7ka6cuD5ImMH21MmF19e_Jp8ug8rq-nHUEjFl74U4O9B8jGQTeVJYKwgkGUz=s1280-w1280-h800" class="card-img-top">
                    <div class="card-body">
                        <form action="./cadastro_usuario.php" method="post">
                            <div class="mb-3">
                                <label for="nome" class="label-control">Nome Completo</label>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="label-control">E-mail</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="senha" class="label-control">Senha</label>
                                <input type="password" name="senha" id="senha" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="confirmar_senha" class="label-control">Confirmar Senha</label>
                                <input type="password" name="confirmar_senha" id="confirmar_senha" class="form-control">
                            </div>

                            <div class="mb-3">
                                <p>Já possui conta? <a href="login.php">Clique Aqui!</a></p>
                            </div>

                            <button type="submit" class="btn btn-dark">Cadastrar-se</button>
                        </form>
                    </div>
                </duv>
            </div>
        </div>
    </div>

    <?php
    if (!isset($_POST['nome'])) {
        exit();
    }
    if (!isset($_POST['email'])) {
        exit();
    }
    if (!isset($_POST['senha'])) {
        exit();
    }
    if (!isset($_POST['confirmar_senha'])) {
        exit();
    }

    $usuario = new Usuario('', '', '', '');
    echo '<div class="row d-flex justify-content-center">';
        echo '<div class="col-6 p-3">';
            echo '<div class="alert alert-primary">';
                echo $usuario->inserir($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['confirmar_senha'], 'comum');
            echo "</div>";
        echo "</div>";
    echo "</div>";
    ?>

<?php include 'footer.php';?>
