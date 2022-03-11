<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <meta charset="utf-8">
        <title>Recherche |Liste Organisation</title>
        <?php echo view('template/header.php') ?>
    </head>
    <style>
        body{
            margin-top: 40px;
        }
        #indication {
            margin-top: 40px;
            color: white;
            background-color: black;
            font-size: 20px;
        }
        .footer {
            margin-top: -16px;
        }
    </style>
    <body>
        <script>
            function myFunction() {
                // Declare variables
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");

                // Loop through all table rows, and hide those who don't match the search query
                for (i = 0; i < tr.length; i++) {
                    //MODIFIER LE NOMBRE ENTRE CROCHET POUR MODIFIER LA COLONNE DE RECHERCHE
                    //[0]=ID
                    //[1]=NOM
                    td = tr[i].getElementsByTagName("td")[1];
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
        <div class="justify-content-center">
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
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Rechercher par le nom..">
            <?php if (!empty($organisations) && is_array($organisations)) : ?>
                <table id="myTable" class="table table-dark table-borderless table-sm">
                    <thead class="">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Mail</th>
                            <th scope="col">Site</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">Supprimer</th>
                            <th scope="col"><a href="/Ajouter/Ajouter_Organisation"><img src="https://www.pngmart.com/files/8/Plus-Transparent-Images-PNG.png" width="20" height="20"/></a></th>
                        </tr>
                    </thead>
                    <?php foreach ($organisations as $organisation) : ?>
                        <tr class='border border-danger'>
                            <!--MISE EN PLACE DE LA RECHERCHE DES INFORMATIONS-->
                            <td> <?php echo ($organisation['ID_Organisation']) ?></td>
                            <td> <?php echo ($organisation['Nom_Organisation']) ?></td>
                            <td> <?php echo ($organisation['Adresse_Organisation']) ?></td>
                            <td> <?php echo ($organisation['Ville_Organisation']) ?></td>
                            <td> <?php echo ($organisation['Mail_Organisation']) ?></td>
                            <td> <a href="https://www.<?php echo ($organisation['Site_Organisation']) ?>">Direction <?php echo ($organisation['Nom_Organisation']) ?></a></td>
                            <td> <?php echo ($organisation['Telephone_Organisation']) ?></td>
                            <td>                   
                                <form name="Modifier" action="<?= Base_url('/Recherche/modifier_organisation/' . $organisation['ID_Organisation']); ?>" method="POST">
                                    <input type="hidden" name="_method" value="MODIFIER">
                                    <button type="submit" class="btn btn-outline-warning" value="">Modifier</button>
                                </form>
                            </td>
                            <td>
                                <form action="<?= base_url('/Recherche/delete_organisation/' . $organisation['ID_Organisation']) ?>" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-dark btn-sm">&#10060;</button>
                                </form>
                            </td>
                            <td>
                                <!-- LAISSER VIDE !!!-->
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