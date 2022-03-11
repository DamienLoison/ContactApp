<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style/MiseEnPage">
        <title>Liste |Login</title>
        <?php echo view('template/header.php') ?>
    </head>
    <style>
        body {
            margin-top: 40px;
            font-family: Arial, Helvetica, sans-serif;
        }
        * {
            box-sizing: border-box;
        }
        /* Bouton permettant d'ouvrir le formulaire' */
        .open-button {
            background-color: #555;
            color: white;
            /*padding: 16px 20px;*/
            border: none;
            cursor: pointer;
            width: 120px;
        }
        /* POPUP formulaire (caché par défaut) */
        .form-popup {
            display: none;
            position: fixed;
            border: 3px solid black;
            z-index: 9;
        }
        .form-container {
            max-width: 300px;
            padding: 10px;
            background-color: black;
        }
        .form-container input[type=text], .form-container input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }
        .form-container input[type=text]:focus, .form-container input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }
        .form-container .btn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom:10px;
            opacity: 0.8;
        }
        .form-container .cancel {
            background-color: red;
        }
        .form-container .btn:hover, .open-button:hover {
            opacity: 1;
        }
        .footer {
            margin-top: -16px;
        }
    </style>
    <script>
        //POUR LA RECHERCHE VIA L ID
        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
    <script>
        //POUR LE MOT DE PASSE
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
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
        <div class="bg-dark">
            <?php
            if (session()->getFlashdata('status')) {
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?= session()->getFlashdata('status'); ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-laber="Close"></button>
                </div>
                <?php
            }
            ?>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Rechercher par l'ID..">
            <?php if (!empty($logins) && is_array($logins)) : ?>
                <table id="myTable" class="table table-dark table-borderless table-sm">
                    <thead class="">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Utilisateur</th>
                            <th scope="col">Mot de passe</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">Supprimer</th>
                            <th scope="col"><a href="/Ajouter/Ajouter_Login"><img src="https://www.pngmart.com/files/8/Plus-Transparent-Images-PNG.png" width="20" height="20"/></a></th>
                        </tr>
                    </thead>
                    <?php foreach ($logins as $login) : ?>
                        <tr class='border border-danger'>
                            <!--MISE EN PLACE DE LA RECHERCHE DES INFORMATIONS-->
                            <td> <?php echo ($login['ID_Login']) ?></td>
                            <td> <?php echo ($login['Utilisateur_Login']) ?></td>
                            <td>
                                <button class="open-button" onclick="openForm()">voir identifiant</button>
                                <div class="form-popup" id="myForm">
                                    <form class="form-container">
                                        <h1>Login</h1>
                                        <label><b>Nom d'utilisateur</b></label>
                                        <input Disabled type="text" name="Utilisateur_Login" value="<?= $login['Utilisateur_Login'] ?>" required>

                                        <label for="psw"><b>Password</b></label>
                                        <input Disabled type="password" name="Password_Login" value="<?= $login['Password_Login'] ?>" id="password" required>
                                        <input type="checkbox" onclick="Afficher()"> afficher mot de passe</input>

                                        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                                    </form>
                                </div>
                            </td>
                            <td>
                                <form action="<?= Base_url('/Recherche/modifier_login/' . $login['ID_Login']); ?>" method="POST">
                                    <input type="hidden" name="_method" value="MODIFIER">
                                    <button type="submit" class="btn btn-outline-warning" value="">Modifier</button>
                                </form>
                            </td>
                            <td>
                                <form action="<?= base_url('/Recherche/delete_login/' . $login['ID_Login']) ?>" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-dark btn-sm">&#10060;</button>
                                </form>
                            </td>
                            <td>
                                <!--LAISSER VIDE !!!-->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif ?>
            </table>
        </div>
        <div class="footer">
            <?php echo view('template/footer.php') ?>
        </div>
    </body>
</html>