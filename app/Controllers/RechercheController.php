<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\ContactModel;
use App\Models\OrganisationModel;
use App\Models\LoginModel;

class RechercheController extends Controller
{
    public function index()
    {
        helper(['Recherche', 'url']);

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

        return view('Recherche', $data,); //,$sql);
    }
    public function changeCouleur()
    {
        /*  NON FONCTIONNEL */
        /* (pour l'instant) */
        $a = rand(0, 3);
        // $a = 2;
        // echo ($a);
        if ($a == 0) {
            echo ' class="pink"'; // on affiche la class
        }
        if ($a == 1) {
            echo ' class="bisque"'; // on affiche la class
        }
        if ($a == 2) {
            echo ' class="olivedrab"'; // on affiche la class
        }
        if ($a == 3) {
            echo ' class="darkorange"'; // on affiche la class
        } else {
            echo ('erreur programme');
        }
        if ($a != 0) {
            echo ('background-color:pink');
        }
    }
    public function recherche()
    {
        // $db = $this->load->database('default');
        // $query = $db->query("SELECT * FROM contact where ID_organisation = $donne ");
        // $row = $query->getRow();
        // if (isset($row)) {
        //     echo $row->Nom_Contact;
        //     echo $row->Prenom_Contact;
        //     echo $row->numeroTel_Contact;
        //     echo $row->mail_Contact;
        // }
        $db      = \Config\Database::connect();
        $builder = $db->table('Contact');
        // $query = $builder->getWhere(['id' => $id], $limit, $offset);
        // $builder->select('Nom_Contact, Prenom_Contact, numeroTel_Contact, mail_Contact');
        // $query = $builder->get();

        
    }
    public function Login()
    {
        // $db = $this->load->database('default');
        // $query = $db->query("YOUR QUERY");

        // $row = $query->getRow();
    }
}
