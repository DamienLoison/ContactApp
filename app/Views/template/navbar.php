<html>
<style>
    .navbar {
        color: black;
        text-align: left;
        margin-left: 90;
        /* border: #14aa8a ; */
        /* outline:solid rgb(84, 84, 84) 5px; */
        margin-top: 150px;
        /*Ne pas toucher au width !*/
        width: 100px;
        height: 250px;
        border: rgb(84, 84, 84) solid 5px;
        /* border-radius: 90px; */
    }

    .navbarli {
        color: #14aa8a;
        display: block;
        /* ESSAIE*/
        width: 100px;
        /*permet de déplacer le texte
        - pour aller à gauche
        + pour aller vers la droite*/
        margin-left: 0px;
        text-align: center;
        font-size: 16px;
        border: blue;

    }

    .navbarli-1 {
        color: #14aa8a;
        display: block;
        /* ESSAIE*/
        width: 100px;
        /*permet de déplacer le texte
        - pour aller à gauche
        + pour aller vers la droite*/
        margin-left: -45px;
        text-align: center;
        font-size: 16px;
        border: blue;
        border-bottom: rgb(84, 84, 84) solid 2px;
    }

    .navbara {
        color: #14aa8a;
        margin-left: -80px;
        /* margin-left: 90; */
        font-size: 14px;
        border: red;
    }

    .navbarUl {
        margin-left: 50px;
        width: 50px;
    }

    /*Barre de navigation vertical*/
    .navbar {
        position: absolute;
        margin-top: -20px;
        /* Ne pas toucher ! */
        margin-left: -230px;
        width: 200px;
        background-color: pink;
        text-align: center;
    }
</style>
<nav class="navbar">
    <ul class="navbarUl">
        <li class="navbarli-1">
            <h4>Liste d'ajout</h4>
        </li>
        <br>
        <li class="navbarli"><a class="navbara" href="ajoutContactController">ajout contact</a></li>
        <br><br>
        <li class="navbarli"><a class="navbara" href="ajoutOrganisationController">ajout Organisation</a></li>
        <br><br>
        <li class="navbarli"><a class="navbara" href="ajoutLoginController">ajout login</a></li>
    </ul>
</nav>

</html>