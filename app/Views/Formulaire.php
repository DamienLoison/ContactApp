<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <meta charset="UTF-8">
        <title>Formualaire d'ajout</title>
    </head>
    <body>
        <div class="AjoutContact">
            <h2>Ajouter un contact</h2>
            <form>
                <ul>
                    <li>
                        <label>Nom du contact</label>
                        <input type="text" name="NomContact" >
                    </li><br>
                    <li>
                        <label>Prénom du contact</label>
                        <input type="text" name="PrenomContact" >
                    </li><br>
                    <li>
                        <label>Numéro de téléphone du contact</label>
                        <input type="tel" name="NumeroTelephoneContact" >
                    </li><br>
                    <li>
                        <label>Email du contact</label>
                        <input type="mail" name="EmailContact" >
                    </li><br>
                </ul>
                <input type="submit" value="Envoyer le formulaire">
            </form>

        </div>
        <div class="AjoutOrganisation">
            <h2>Ajouter une organisation</h2>
            <form>
                <ul>
                    <li>
                        <label>Nom de l'organisation</label>
                        <input type="text" name="NomOrganisation" >
                    </li><br>
                    <li>
                        <label>Adresse de l'organisation</label>
                        <input type="text" name="AdresseOrganisation" >
                    </li><br>
                    <li>
                        <label>Numéro de téléphone de l'organisation</label>
                        <input type="tel" name="NumeroTelephoneOrganisation" >
                    </li><br>
                    <li>
                        <label>Email de l'organisation</label>
                        <input type="mail" name="EmailOrganisation" >
                    </li><br>
                    <li>
                        <label>Site internet de l'organisation</label>
                        <input type="text" name="SiteOrganisation" >
                    </li><br>
                </ul>
                <input type="submit" value="Envoyer le formulaire">
            </form>
        </div>

        <div class="AjoutLogin">
            <h2>Ajout d'un login</h2>
            <form>
                <ul>
                    <li>
                        <label>Nom utilisateur</label>
                        <input type="text" name="NomLogin" >
                    </li><br>
                    <li>
                        <label>Mot de passe Utilisateur</label>
                        <input type="password" name="passwordLogin">
                    </li><br>
                </ul>
                <input type="submit" value="Envoyer le formulaire">
            </form>
        </div>
    </body>
</html>
