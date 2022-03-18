<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Modification login</title>
    </head>
    <script>
        function Afficher()
        {
            var input = document.getElementById("password");
            if (input.type === "password")
            {
                input.type = "text";
            } else
            {
                input.type = "password";
            }
        }
    </script>
    <body>
        <div class="nav">
            <?php echo view('template/header.php') ?>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-4 offset-4 my-3">
                    <form action="<?= base_url('Recherche/tout_les_login'); ?>" method="POST">
                        <button type="submit" class="btn btn-danger btn-block btn-lg float-end">Retour</button>
                    </form>  
                    <h2>Modifier un Login</h2>
                    <form action="<?= base_url('Recherche/update_login/' . $login['ID_Login']); ?>" method="POST">
                        <div class="mb-3 mt-3">
                            <label>Utilisateur :</label>
                            <input type="text" name="Utilisateur_Login" class="form-control" value="<?= $login['Utilisateur_Login'] ?>" placeholder="Entrer le nom d'utilisateur"  required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label>Mot de passe :</label>
                            <input type="password" name="Password_Login" class="form-control" value="<?= $login['Password_Login'] ?>" placeholder="Entrer le mot de passe" id="password"  required>
                            <input type="checkbox" onclick="Afficher()"> afficher mot de passe</input>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
