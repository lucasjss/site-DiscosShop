<!-- app/Views/index.php -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SonoDiscos</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>

    <body>
        <div class="conteiner">
            <nav class="navbar navbar-light" style="background-color: #654597;">
                <div class="container d-flex flex-column flex-md-row justify-content-between">
                <a class="nav-link" href="./index.php"> <img class="navbar-brand" src="./img/icon.png" alt="icon" style="width: 50px;"></a>
                <a class="btn btn-light bi bi-file-earmark-plus-fill" href ="<?= site_url('adicionar') ?>"> ADICIONAR</a>                                
                </div>
            </nav>

            <div class="container mt-4 d-flex justify-content-center">
                <a class="btn btn-info" href="<?= site_url('autoria') ?>"> AUTORIA</a>
            </div>

            <div class="container mt-4">
                <?php foreach ($discos as $disco): ?>
                    <div class="disco card mb-3">
                        <div class="card-body">
                            <h2 class="card-title"><?= $disco['nome']; ?></h2>
                            <p class="card-text">Autoria: <?= $disco['autoria']; ?></p>
                            <p class="card-text">Gênero: <?= $disco['genero']; ?></p>
                            <p class="card-text">Lançamento: <?= $disco['lancamento']; ?></p>
                            <div class="d-flex bd-highlight">
                                <a class="btn btn-primary p-2 bd-highlight bi bi-pencil-square" href="<?= site_url('editar/') .$disco['nome'] ?>" alt="Editar"> Editar</a>
                                <a class="bi bi-trash ml-auto p-2 bd-highlight" href="<?= base_url().'remover/' .$disco['nome'] ?>" alt="Remover"></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <footer class="footer" style="background-color: #654597;">
                <div class="container">
                    <span class="text-monospace" style="color: #E2ADF2;">Desenvolvido por: Lucas André de Jesus</span>
                </div>
            </footer>  
        </div>
    

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    </body>
</html>
