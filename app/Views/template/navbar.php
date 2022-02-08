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
        border: rgb(84, 84, 84) solid 5 px;
        border-width: 100px;
    }

    .navbar0 {
        color: #14aa8a;
        display: block;
        /* ESSAIE*/
        width: 70px;
        /*permet de déplacer le texte
        - pour aller à gauche
        + pour aller vers la droite*/
        margin-left: 0px;
    }

    .navbar1 {
        color: #14aa8a;
        margin-left: -50px;
        margin-left: 90;
    }
    .navbar2{
        /*margin-left: 50px;*/
        width: 50px;
    }
</style>
<nav class="navbar">
    <ul class="navbar2">
        <li class="navbar0">Liste d'ajout</li>
        <li class="navbar0"><a class="navbar1" href="Views/ajout-information/ajout-contact">ajout contact</a></li>
        <li class="navbar0"><a class="navbar1" href="Views/ajout-information/ajout-organisation">ajout Organisation</a></li>
        <li class="navbar0"><a class="navbar1" href="ajout_loginController">ajout login</a></li>
    </ul>
</nav>

</html>