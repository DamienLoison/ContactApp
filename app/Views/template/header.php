<html lang="fr-Fr">

<head>
    <meta charset="uft-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    /* Modification de la Navbar (barre de navigation)*/
    /* nav {
        background-color: rgb(84, 84, 84);
        padding: 0;
        margin: 0;
        height: 40px;
        font-size: 17px;
    } */
    .navigation {
        background-color: rgb(84, 84, 84);
        padding: 0;
        margin: 0;
        height: 60px;
        font-size: 17px;
    }

    .navigation1 {
        display: inline-block;
        list-style: none;
        color: white
    }

    .navigation2 {
        display: inline-block;
        margin: 0 30px;
        color: white;
    }

    /* nav li {
        display: inline-block;
        list-style: none;
        color: white
    }

    nav a {
        display: inline-block;
        margin: 0 30px;
        color: white;
    } */

    .nav{
        background-color: rgb(84, 84, 84);
    }
</style>
<!-- <nav class="navigation">
    <ul>
        <li class="navigation1">@Recherche Contact/Organisation</li>
        <li class="navigation1"><a class="navigation2" href="AccueilController">Accueil</a></li>
        <li class="navigation1"><a class="navigation2" href="InformationController">Information</a></li>
        <li class="navigation1"><a class="navigation2" href="RechercheController">Recherche</a></li>
        <li class="navigation1"><a class="navigation2" href="ContactController">[TEMPORAIRE] ajout</a></li>
        <li class="navigation1"><a class="navigation2" href="AideController">Rechercher</a></li>
    </ul>
</nav> -->

<ul class="nav fixed-top" >
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="https://github.com/DamienLoison/ContactApp">ContactApp</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index">Accueil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="aide_contact">Aide [EN COUR]</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
</ul>

</html>