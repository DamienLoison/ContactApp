<!doctype html>
<html lang="fr-Fr">
    <head>
        <meta charset="utf-8">
        <title>Liste Utilisateurs</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <?php echo view('template/header.php') ?>
    </head>
    <body>
        <?php
        $session = session();
        ?>
        <script>
        </script>
        <style>
            body{
                margin-top: 40px;
            }
        </style>
        <div class="container">
            <table class="table">
                <?php
                if ($session->get('user_name') == 'admin') {
                    echo "<thread>";
                    echo "<tr>";
                    echo "<th scope='col'>ID</th>";
                    echo "<th scope='col'>Nom/rôle</th>";
                    echo "<th scope='col'>Email</th>";
                    echo "<th scope='col'>date de création</th>";
                    echo "</tr>";
                    echo "</thread>";
                    foreach ($users as $user) {
                        echo "<tr class='border border-dark'>";
                        echo "<td>" . $user['user_id'] . "</td>";
                        echo "<td>" . $user['user_name'] . "</td>";
                        echo "<td>" . $user['user_email'] . "</td>";
                        echo "<td>" . $user['user_created_at'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<thread>";
                    echo "<tr>";
                    echo "<th scope='col'>ID</th>";
                    echo "<th scope='col'>Nom/rôle</th>";
                    echo "<th scope='col'>date de création</th>";
                    echo "</tr>";
                    echo "</thread>";
                    foreach ($users as $user) {
                        echo "<tr class='border border-dark'>";
                        echo "<td>" . $user['user_id'] . "</td>";
                        echo "<td>" . $user['user_name'] . "</td>";
                        echo "<td>" . $user['user_created_at'] . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </div>
    </body>
    <footer>
        <?php echo view('template/footer.php') ?>
    </footer>
</html>