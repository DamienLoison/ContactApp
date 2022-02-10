<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ContactModel;
use App\Models\OrganisationModel;
use App\Models\LoginModel;
use App\Models\insertModel;

class ajoutContactController extends Controller
{

    public function index()
    {
        helper(['ajoutContact', 'url']);

        $model = new ContactModel();
        $model1 = new OrganisationModel();
        $model2 = new LoginModel();
        $data = [
            'contacts' => $model->getContact(),
            'organisations' => $model1->getOrganisation(),
            'logins' => $model2->getLogin(),
            // '' => $model->getContact

        ];
        // A TERMINER MAIS 
        //  NECESSITE LA RECHERCHE DE COMMENT 
        //  TRANSFERER LES DONNEES DE LA VUE AU CONTROLLER
        // $sql = "SELECT * FROM Contact WHERE ID_Contact = ? AND Nom_Contact = ? AND Prenom_Contact = ?";

        //LES POINTS D'INTERROGATIONS DOIVENT ETRE REMPLACER PAR LES BONNES DONNEES

        return view('ajoutContact', $data);
    }
    public function setContact()
    {
        //$con = new PDO('mysql:host=sql.mondomaine.fr;dbname=nomdemabase;charset=utf8', 'user', 'pass');
        // $Nom_Contact = $_POST['Nom_Contact'];
        // $Prenom_Contact = $_POST['Prenom_Contact'];
        // $numeroTel_Contact = $_POST['numeroTel_Contact'];
        // $mail_Contact = $_POST['mail_Contact'];

        // $sql = "INSERT INTO contact SET $Nom_Contact, $Prenom_Contact, $numeroTel_Contact, $mail_Contact;";
        // $sql->execute()
        // Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')
    }
    public function insertContact(){
        $model = new insertModel;

    }
}
