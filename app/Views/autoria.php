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
                <a class="nav-link" href="./"> <img class="navbar-brand" src="../../public/img/icon.png" alt="icon" style="width: 50px;"></a>
                <a class="btn btn-light bi bi-file-earmark-plus-fill" href ="<?= site_url('adicionarAutoria') ?>"> ADICIONAR AUTORIA</a>                                
                </div>
            </nav>

            
            <div class="container mt-5">
                <?php foreach ($autorias as $autoria => $discos): ?>
                    <div class="disco card mb-3 px-3">
                        <h2 class="card-title"><?= $autoria; ?></h2>
                        <ul>
                            <?php foreach ($discos as $disco): ?>
                                <li><?= $disco['nome']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="d-flex bd-highlight mb-1">
                            <a class="btn btn-primary p-2 bd-highlight bi bi-pencil-square" href="<?= site_url('editarAutoria/') .$autoria ?>" alt="Editar"> Editar</a>
                            <a class="bi bi-trash ml-auto p-2 bd-highlight" href="<?= base_url().'removerAutoria/' .$autoria ?>" alt="Remover"></a>
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
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    </body>
</html>
