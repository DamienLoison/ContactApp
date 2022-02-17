<!DOCTYPE html>
<html lang="fr-Fr">

<head>
    <meta charset="UTF-8">
    <title>Formualaire d'ajout</title>
</head>

<body>
    <div class="AjoutContact">
        <h2>Ajout contact</h2>

        <form method="post" action="('ContactController/formulaire')">
            <table cellpadding="2" cellspacing="2">
                <tr>
                    <td>Nom du contact :</td>
                    <td>
                        <input type="text" name="NomContact" value="<?= set_value('Nom_Contact'); ?>" />
                    </td>
                    <td><?= $validation->getError('Nom_Contact') ?></td>
                </tr>
                <tr>
                    <td>Prénom du contact</td>
                    <td>
                        <input type="text" name="PrenomContact" value="<?= set_value('Prenom_Contact'); ?>"/>
                    </td>
                    <td><?= $validation->getError('Prenom_Contact') ?></td>
                </tr>
                <tr>
                    <td>Numéro de téléphone du contact</td>
                    <td>
                        <input type="text" name="NumeroTelephoneContact" value="<?= set_value('numeroTel_Contact'); ?>"/>
                    </td>
                    <td><?= $validation->getError('numeroTel_Contact') ?></td>
                </tr>
                <tr>
                    <td>Mail du contact</td>
                    <td>
                        <input type="text" name="MailContact" value="<?= set_value('mail_Contact'); ?>"/>
                    </td>
                    <td><?= $validation->getError('mail_Contact') ?></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <input type="submit" value="Save" />
                    </td>
                </tr>
            </table>
        </form>
        <?php

        //     echo form_open();

        //     //<input name="nom" type="text" value="" / on met à sa place:>

        //   $NomContact= array(
        //   'name'=>'NomContact',
        //   //'id'=>'nom',
        //   'placeholder'=>'Nom', // sa remplace label  echo form_label('Votre nom', 'nom');
        //   'value'=>set_value('NomContact')
        //     );
        //   //echo form_error('nom');
        //   echo form_input($NomContact);

        //   $PrenomContact=array(
        //   'name'=>'PrenomContact',
        //   //'id'=>'prenom',
        //   'placeholder'=>'Prenom',
        //   'value'=>set_value('PrenomContact')
        //   );
        //   //echo form_error('prenom');
        //   echo form_input($PrenomContact);

        //   $mailContact=array(
        //   'name'=>'mailContact',
        //   //'id'=>'mail',
        //   'placehoder'=>'mail',
        //   'value'=>set_value('mailContact')
        //   );
        //   //echo form_error('mail');
        //   echo form_input($mailContact);

        //   $TelContact=array(
        //     'name'=>'TelContact',
        //     //'id'=>'mail',
        //     'placehoder'=>'Tel',
        //     'value'=>set_value('TelContact')
        //     );
        //     //echo form_error('mail');
        //     echo form_input($mailContact);
        //   echo form_submit('envoi', 'Valider');
        //   echo form_close();
        ?>
        <form name="form" action="AjoutContactController/ajouter_Contact" method="post">
            <ul>
                <li>
                    <label>Nom du contact</label>
                    <input type="text" name="NomContact">
                    <?php //$NomContact 
                    ?>
                </li><br>
                <li>
                    <label>Prénom du contact</label>
                    <input type="text" name="PrenomContact">
                    <?php //$PrenomContact 
                    ?>
                </li><br>
                <li>
                    <label>Numéro de téléphone du contact</label>
                    <input type="text" name="TelContact">
                    <?php //$TelContact 
                    ?>
                </li><br>
                <li>
                    <label>Email du contact</label>
                    <input type="text" name="MailContact">
                    <?php //$MailContact 
                    ?>
                </li><br>
                <li>
                    <label>Organisation du contact</label>
                    <input type="text" name="OrganisationContact">
                    <?php //$OrganisationContact 
                    ?>
                </li><br>
            </ul>
            <input type="submit" value="Envoyer le formulaire">
        </form>

    </div>
</body>

</html>