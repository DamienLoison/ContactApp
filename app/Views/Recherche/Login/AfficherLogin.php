<!doctype html>
<html lang="fr-Fr">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <?php echo view('template/header.php') ?>
    </head>
    <body class="bg-dark"> 
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
        <style>
            .information{
                margin-left: 25%;
                width: 50%;
                height: 40%;
            }
            body{
                margin-top: 40px;
                margin-top: 10%;
            }
            .corps{
                margin-top: 10%;
            }
            #retour{
                width: 20%;
                height: 10%;
                margin-left: 40%;
            }
        </style>
        <div class="container text-white text-center">
            <h2>INFORMATION DE CONNEXION</h2>
            <!--DIV A CENTRER-->
            <div class="information">
                <div class="corps row d-flex bg-light border border-secondary text-dark">  
                    <div class="col">
                        <label><b>Nom d'utilisateur</b></label>
                        <input Disabled type="text" name="Utilisateur_Login" value="<?= $login['Utilisateur_Login'] ?>" required>
                    </div>
                    <div class="col">
                        <label for="psw"><b>Password</b></label>
                        <input Disabled type="password" name="Password_Login" value="<?= $login['Password_Login'] ?>" id="password" required>
                        <br>
                        <input type="checkbox" onclick="Afficher()"> afficher mot de passe</input>
                    </div>
                </div>
                <br>
                <div id="retour" class="">
                    <form action="<?= base_url('Recherche/tout_les_login'); ?>" method="POST">
                        <button type="submit" class="btn btn-danger btn-lg float-end">Retour</button>
                    </form> 
                </div>
            </div>
        </div>
    </body>
</html>