<?php include 'header.php';?>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-8 col-xl-6 col-xxl-4">
                <duv class="card bg-light shadow my-5">
                    <img src="..." class="card-img-top">
                    <div class="card-body">
                        <form action="" method="post">
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
                                <p>Jápossui conta? <a href="login.php">Clique Aqui!</a></p>
                            </div>

                            <button type="submit" class="btn btn-dark">Cadastrar-se</button>
                        </form>
                    </div>
                </duv>
            </div>
        </div>
    </div>

<?php include 'footer.php';?>