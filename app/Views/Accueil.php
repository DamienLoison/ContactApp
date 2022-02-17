<!DOCTYPE html>
<html lang="fr-Fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Style.css" media="all" />
    <title>Accueil</title>
    <style>
    </style>
</head>
<style>
    .nav {
        height: 40px;
    }

    .footer {
        height: 75px;
    }
</style>

<body>
    <div class="nav">
        <?php echo view('template/header.php') ?>
    </div>

    <div class="Accueil">
        <h1>Bienvenu sur ContactApp</h1>
        <h2>Ceci n'est qu'une version Beta</h2>
        <h4>se réferrer au Note Patch actuel disponible depuis la barre de navigation</h4>
    </div>

    <div class="footer">
        <?php echo view('template/footer.php') ?>
    </div>
</body>

</html>