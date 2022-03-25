<html lang="fr-Fr">
    <head>
        <meta charset="uft-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <style>
        .nav {
            background-color: rgb(84, 84, 84);
            color: white;
            height: 40px;
        }
        .nav-link {
            color: rgb(51, 153, 255);
        }
        #contact{
            color : blueviolet;
            background-color: rgb(84,84,84);
            border-color: rgb(84,84,84);
        }
        #organisation{
            color : tomato;
            background-color: rgb(84,84,84);
            border-color: rgb(84,84,84);
        }
        #login{
            color : seagreen;
            background-color: rgb(84,84,84);
            border-color: rgb(84,84,84);
        }
        #Accueil{
            background-color: rgb(84,84,84);
            color: rgb(51, 153, 255);
        }
        #Accueil_liste{
            background-color: rgb(84,84,84);
            color: rgb(51, 153, 255);
        }
        #Accueil_liste_color{
            color: rgb(51, 153, 255);
        }
    </style>
    <?php $session = session(); ?>
    <ul class="nav fixed-top">
        <li class=".navbar-brand">
            <a class="nav-link active" aria-current="page" href="https://github.com/DamienLoison/ContactApp"><img src="<?php echo base_url('image/nav/ContactApp.png'); ?>"width="30px" height="30px" alt="ContactApp" /></a>
        </li>
        <!--ACCUEIL-->
        <li>
            <div class="btn-group">
                <a class="nav-link" href="/Accueil">Accueil</a>
                <button id="Accueil_liste" type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu bg-dark">
                    <li><a id="Accueil_liste_color" class="dropdown-item" href="/Accueil/aide">Aide</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a id="Accueil_liste_color" class="dropdown-item" href="/Accueil/architecture_site">Toutes les pages</a></li>
                </ul>
            </div>
        </li>
        <!--CONTACT-->
        <li>
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle" id="contact" data-bs-toggle="dropdown" aria-expanded="false">
                    Contact
                </button>
                <ul class="dropdown-menu bg-dark">
                    <li><a class="dropdown-item" style="color: blueviolet;" href="/Accueil/tout_les_contacts">Tout les contacts</a></li>
                    <li><hr class="dropdown-divider" style="color: white;" ></li>
                    <li><a class="dropdown-item" style="color: blueviolet;"  href="/Accueil/ajouter_contact">Ajouter un contact</a></li>
                </ul>
            </div>
        </li>
        <!--ORGANISATION-->
        <li>
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle" id="organisation" data-bs-toggle="dropdown" aria-expanded="false">
                    Organisation
                </button>
                <ul class="dropdown-menu bg-dark">
                    <li><a class="dropdown-item" style="color: tomato;" href="/Accueil/toute_les_organisations">Toute les organisations</a></li>
                    <li><hr class="dropdown-divider" style="color: white;" ></li>
                    <li><a class="dropdown-item" style="color: tomato;"  href="/Accueil/ajouter_organisation">Ajouter une organisations</a></li>
                </ul>
            </div>
        </li>
        <!--LOGIN-->
        <li>
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle" id="login" data-bs-toggle="dropdown" aria-expanded="false">
                    Login
                </button>
                <ul class="dropdown-menu bg-dark">
                    <li><a class="dropdown-item" style="color: seagreen;" href="/Accueil/tout_les_login">Tout les logins</a></li>
                    <li><hr class="dropdown-divider" style="color: white;" ></li>
                    <li><a class="dropdown-item" style="color: seagreen;"  href="/Accueil/ajouter_login">Ajouter un logins</a></li>
                </ul>
            </div>
        </li>
        <!--NOM APP-->
        <li class="position-absolute top-50 start-50 translate-middle">
            <h3>ContactApp</h3>
        </li>
        <!--
        IMAGE UTILISATEUR
        INSCRIPTION
        -->
        <?php
        if ($session->get('user_name') == null) {
            echo "<li class='nav-item ms-auto'>";
            echo "<a class='nav-link' href='/LoginRegisterController/'>";
            echo "<img src='" . base_url('image/nav/inscription.png') . "'width='30px' height='30px' alt='inscription:'/>";
            echo "</a>";
            echo "</li>";
//            echo "";
        } else {
            echo "<li class='nav-item ms-auto'>";
            echo "</li>";
        }
        ?>
        <!--PAGE PROFIL-->
        <li class="nav-item">
            <div class="dropdown">
                <button class="btn-grou btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="user:" width="30px" height="30px"/>
                    <?php
                    if ($session->get('user_name') == null) {
                        echo "connectez-vous ! " . " ";
                    } else {
                        echo " " . $session->get('user_name');
                    }
                    ?>
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item active" href="/User/profil">Afficher profil</a></li>
                    <!--<li><a class="dropdown-item" href="#">Another action</a></li> -->

                    <?php
                    //AFFICHE OU NON LE BOUTON CONNEXION
                    if ($session->get('user_name') == null) {
                        echo "<li>";
                        echo "<a class='nav-link text-sucess' href='/LoginRegisterController/login'>";
                        echo "<img src='" . base_url('image/nav/connexion.png') . "'width='20px' height='20px' alt='connexion:'/>";
                        echo "connexion";
                        echo "</a>";
                        echo "</li>";
                        //AFFICHER OU NON LE BOUTON DECONNEXION    
                    } else {
                        echo "<li>";
                        echo "<a class='nav-link text-danger' href='/LoginRegisterController/logout'>";
                        echo "<img src='" . base_url('image/nav/deconnexion.png') . "'width='20px' height='20px' alt='déconnexion:'/>";
                        echo "déconnexion";
                        echo "</a>";
                        echo "</li>";
                    }
                    ?>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/Accueil/tout_les_utilisateurs">Liste utilisateurs</a></li>
                </ul>
            </div>
        </li>
    </ul>
</html>
