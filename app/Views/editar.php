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
                <a class="nav-link bi bi-house" style="color: white;" href="<?= site_url('/') ?>"></a>
                </div>
            </nav>
            
            <div class="conteiner mx-5 align-center my-5">
                <form class="form-signin" action="<?= site_url("salvarEdicao/{$discos['nome']}") ?>" method="post">
                    <div class="form-label-group">
                        <label for="nome" class="col-sm-2 col-form-label">nome:</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="nome" value="<?= $discos['nome'] ?>" required >
                        </div>
                    </div>
                    <div class="form-label-group">
                        <label for="autoria" class="col-sm-2 col-form-label">autoria:</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="autoria" value="<?= $discos['autoria'] ?>" required>
                        </div>
                    </div>
                    <div class="form-label-group">
                        <label for="genero" class="col-sm-2 col-form-label">gênero:</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="genero" value="<?= $discos['genero'] ?>" required>
                        </div>
                    </div>
                    <div class="form-label-group">
                        <label for="lancamento" class="col-sm-2 col-form-label">lançamento:</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="lancamento" value="<?= $discos['lancamento'] ?>" required>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 mx-3 bi bi-floppy" type="submit"> Salvar</button>
                </form>
            </div>
    
    <a class="ml-auto mb-1 mt-4 btn btn-primary p-2 bd-highlight mr-5 bi bi-arrow-return-left" href="<?= site_url('/') ?>"> Voltar</a>
 
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
