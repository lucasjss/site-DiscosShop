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
                <a class="nav-link" href="<?= site_url('/') ?>"> <img class="navbar-brand" src="../..//public/img/icon.png" alt="icon" style="width: 45px;"></a>
                </div>
            </nav>
            
            <div class="conteiner mx-5 align-center mt-5 mb-5">
                <form class="form-signin" action="<?= site_url('salvarAutoria') ?>" method="post">
                    <div class="form-label-group">
                        <label for="nomeAutoria" class="col-sm-2 col-form-label">nome:</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="nomeAutoria" required>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 mx-3 bi bi-floppy" type="submit"> Cadastrar</button>
                </form>
            </div>
    
    <a class="ml-auto mt-3 btn btn-primary p-2 bd-highlight mr-5 bi bi-arrow-return-left" href="<?= site_url('/') ?>"> Voltar</a>

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
