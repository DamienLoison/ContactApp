<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <title>Connexion ContactApp</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <style>
            body{
                margin-top: 40px;
            }
        </style>
        <div class="container">
            <div class="row justify-content-md-center">

                <div class="col-6">
                    <h1>CONNEXION</h1>
                    <?php if (session()->getFlashdata('msg')): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                    <?php endif; ?>
                    <form action="/postLogin" method="post">
                        <div class="mb-3">
                            <label for="InputForEmail" class="form-label">Adresse email</label>
                            <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                        </div>
                        <div class="mb-3">
                            <label for="InputForPassword" class="form-label">mot de passe</label>
                            <input type="password" name="password" class="form-control" id="InputForPassword">
                        </div>
                        <button type="submit" class="btn btn-primary">Connexion</button>
                        <button type="button" class="btn btn-primary"><a class="text-white" href="/LoginRegisterController/">pas de compte ?</a></button>
                    </form>
                </div>

            </div>
        </div>

        <!-- Popper.js first, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    </body>
</html>