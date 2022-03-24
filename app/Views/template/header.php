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
        /*        #user{
                    background-color: black;
                }*/
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
        <!--PARTIE TEST/MODIFICATION-->
        <li class="nav-item">
            <a class="nav-link" href="/Accueil/architecture_site" tabindex="-1">Ensembles des pages</a>
        </li>
        <li class="nav-item ms-auto">
            <a class="nav-link" href="/LoginRegisterController/">Inscription</a>
        </li>
        <li class="nav-item">
            <div class="dropdown">
                <button class="btn-grou btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="user:" width="30px" height="30px"/>
                    <?php
                    $session = session();
                    if ($session->get('user_name') == null) {
                        echo "connectez-vous ! " . " ";
                    } else {
                        echo " " . $session->get('user_name');
                    }
                    ?>
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                    <li><a id="user" class="nav-link" href="/User/profil">Afficher profil</a></li>
                    <li><a id="user" class="nav-link" href="/User/tout_les_utilisateurs">Voir tout les utilisateurs</a></li>
                    <li>
                        <a class="nav-link text-sucess" href="/LoginRegisterController/login">
                            <img src="<?php echo base_url('image/nav/connexion.png'); ?>"width="20px" height="20px" alt="connexion:"/>
                            connexion
                        </a>
                    </li>
                    <li>
                        <a class="nav-link text-danger" href="/LoginRegisterController/logout">
                            <img src="<?php echo base_url('image/nav/deconnexion.png'); ?>"width="20px" height="20px" alt="déconnexion:"/>
                            déconnexion
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</html>