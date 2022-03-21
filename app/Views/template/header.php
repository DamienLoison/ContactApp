<html lang="fr-Fr">
    <head>
        <meta charset="uft-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <style>
        .nav {
            background-color: rgb(84, 84, 84);
            color: rgb(198, 83, 140);
            height: 40px;
        }
        .nav-link {
            color: rgb(51, 153, 255);
        }
    </style>
    <ul class="nav fixed-top">
        <li class=".navbar-brand">
            <a class="nav-link active" aria-current="page" href="https://github.com/DamienLoison/ContactApp">ContactApp</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Accueil">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Recherche/index">Recherche</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Accueil/aide">Aide</a>
        </li>

        <!--PARTIE UTILISATEUR (USER)-->

        <li class="nav-item">
            <a class="nav-link" href="/register/">Inscription</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/User/login">Connexion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="/User/logout">Déconnexion</a>
        </li>
        

        <!--PARTIE TEST/MODIFICATION-->

        <li class="nav-item">
            <a class="nav-link" href="/Accueil/architecture_site" tabindex="-1">Ensembles des pages</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Accueil/note_patch" tabindex="-1">Note de patch</a>
        </li>
        <li class="nav-item ms-auto">
            v1.0.1
        </li>
    </ul>
</html>