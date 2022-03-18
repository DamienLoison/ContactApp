<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style/MiseEnPage">
        <title>Recherche | Liste Contact</title>
        <?php echo view('template/header.php') ?>
    </head>
    <style>
        .fiche{
            margin-top: 40px;
            margin-left: 0.4px;
            margin-right: 0.5px;
            background-color: #545454;
        }
        td{
            font-size: 24px;
            background-color: #545454;
        }
        footer{
            margin-top: -16px;
        }

        #myInput {
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/3/36/Search_Icon.png?20200524051850'); /* Add a search icon to input */
            background-size: auto 25px;
            background-position: 10px 12px; /* Position the search icon */
            background-repeat: no-repeat; /* Do not repeat the icon image */
            width: 100%; /* Full-width */
            font-size: 16px; /* Increase font-size */
            padding: 12px 20px 12px 40px; /* Add some padding */
            border: 1px solid #ddd; /* Add a grey border */
            margin-bottom: 12px; /* Add some space below the input */
        }

        #myTable {
            border-collapse: collapse; /* Collapse borders */
            width: 100%; /* Full-width */
            border: 1px solid #ddd; /* Add a grey border */
            font-size: 18px; /* Increase font-size */
        }

        #myTable th, #myTable td {
            text-align: left; /* Left-align text */
            padding: 12px; /* Add padding */
        }

        #myTable tr {
            /* Add a bottom border to all table rows */
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header, #myTable tr:hover {
            /* Add a grey background color to the table header and on hover */
            background-color: #f1f1f1;
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
        <div class="fiche">
            <div class="corp justify-content-center">
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
                <?php if (!empty($contacts) && is_array($contacts)) : ?>
                    <table id="myTable" class="table table-dark table-borderless table-sm">
                        <thead class="">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Numéro de téléphone</th>
                                <th scope="col">mail</th>
                                <th scope="col">Organisation</th>
                                <th scope="col">Modifier</th>
                                <th scope="col">Supprimer</th>
                                <th scope="col"><a href="/Ajouter/Ajouter_Contact"><img src="https://www.pngmart.com/files/8/Plus-Transparent-Images-PNG.png" alt="ajouter" width="20" height="20"/></a></th>
                            </tr>
                        </thead>
                        <?php foreach ($contacts as $contact) : ?>
                            <tr class='border border-danger'>
                                <!--MISE EN PLACE DE LA RECHERCHE DES INFORMATIONS-->
                                <td><?php echo ($contact['ID_Contact']) ?></td>
                                <td><?php echo ($contact['Nom_Contact']) ?></td>
                                <td><?php echo ($contact['Prenom_Contact']) ?></td>
                                <td><?php echo ($contact['numeroTel_Contact']) ?></td>
                                <td><?php echo ($contact['mail_Contact']) ?></td>
                                <td>
                                    <?php
                                    //AFFICHE LE NOM DE L ORGANISATION EN FONCTION DE SON ID
                                    foreach ($organisations as $organisation) {
                                        if ($organisation['ID_Organisation'] == $contact['ID_Organisation']) {
                                            $NomOrganisation = $organisation['ID_Organisation'] . " " . $organisation['Nom_Organisation'];
                                            echo $NomOrganisation;
                                        }
                                    }
                                    ?>
                                </td>
                                <td>
                                    <form action="<?= base_url('/Recherche/modifier_contact/' . $contact['ID_Contact']); ?>" method="POST">
                                        <input type="hidden" name="_method" value="MODIFIER">
                                        <button type="submit" class="btn btn-outline-warning" value="">Modifier</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="<?= base_url('/Recherche/delete_contact/' . $contact['ID_Contact']) ?>" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-dark btn-sm">&#10060;</button>
                                    </form>
                                </td>       
                                <td>
                                    <!--LAISSER VIDE !!!-->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                <?php endif ?>     
            </div>
        </div>
    </body>
    <footer>
        <?php echo view('template/footer.php') ?>
    </footer>
</html>