<?php include 'header.php';?>
<?php include 'autor.php'; ?>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-8 col-xl-6 col-xxl-4">  
                <div class="card bg-light shadow my-5">
                    <img src="https://png.pngtree.com/thumb_back/fh260/background/20241225/pngtree-thoughtful-silhouette-of-a-writer-seated-at-desk-pen-in-hand-image_16866567.jpg" class="card-img-top">
                    <div class="card-body">
                        <form action="./cadastro_autor.php" method="post">
                            <div class="mb-3">
                                <label for="nome" class="label-control">Nome Completo</label>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>

                            <div class="mb-3" >
                                <label for="biografia" class="form-label">Biografia</label>
                               <textarea name="biografia" class="form-control" id="biografia" rows="3"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="foto" class="label-control">Foto</label>                         
                                <span class="input-group-text" id="basic-addon3">Exemplo: https://example.com/users/</span>
                                <input name="foto" type="text" class="form-control" id="foto" aria-describedby="basic-addon3 basic-addon4">
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
    if (!isset($_POST['biografia'])) {
        exit();
    }
    if (!isset($_POST['foto'])) {
        exit();
    }

    $autor = new Autor('', '', '');
    echo '<div class="row d-flex justify-content-center">';
        echo '<div class="col-6 p-3">';
            echo '<div class="alert alert-primary">';
                echo $autor->inserir($_POST['nome'], $_POST['biografia'], $_POST['foto'], 'comum');
            echo "</div>";
        echo "</div>";
    echo "</div>";
    ?>

<?php include 'footer.php';?>
