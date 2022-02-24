<?php

namespace App\Controllers;

use App\Models\ContactModel;
use App\Models\OrganisationModel;
use App\Models\LoginModel;
use CodeIgniter\Controller;
use CodeIgniter\Model;

class Recherche extends Controller {

    public function __construct() {
        $this->db = \Config\Database::connect();
        $this->ContactModel = $this->db->table('contact');
    }

    public function index() {
        helper(['Contact', 'url']);

        echo view('template/header');
        echo view('Recherche/AccueilRecherche');
        echo view('template/footer');
    }

    public function aide_contact() {
        echo view('template/header');
        echo view('Recherche/information');
        echo view('template/footer');
    }

    /*
     * FONCTION TRAITANT DES CONTACTS
     *
     *
     */

    public function tout_les_contacts() {
        $model = new ContactModel();
        $model1 = new OrganisationModel();
        $data = [
            'contacts' => $model->getContact(),
            'organisations' => $model1->getOrganisation(),
        ];
        echo view('Recherche/AfficheContactEntier', $data);
    }

    public function recherche_contact() {
        $model = new ContactModel();
        $model1 = new OrganisationModel();
        $data = [
            'contacts' => $model->getContact(),
            'organisations' => $model1->getOrganisation()
        ];
        echo view('Recherche/RechercheContact', $data);
        // function resultat_contact(){
        //     $choix = filter_input(INPUT_POST, 'ChoixRechercheContact');
        //     $recherche = filter_input(INPUT_POST, 'search');
        //     $model = new ContactModel;
        //     $data['all'] = $model->recherche_contact($choix, $recherche);
        //     $data =[
        //         'contact'   => $model->recherche_contact($choix, $recherche)
        //     ];
        //     return $data;
        //     echo view('Recherche/RechercheContact', $data);
        //     return $data;
        //     echo($data);
    }

    // public function resultat_contact()
    // {
    //     $choix = filter_input(INPUT_POST, 'ChoixRechercheContact');
    //     $recherche = filter_input(INPUT_POST, 'search');
    //     $model = new ContactModel;
    //     $data['all'] = $model->recherche_contact($choix, $recherche);
    //     // $data =[
    //     //     'contact'   => $model->recherche_contact($choix, $recherche)
    //     // ];
    //     // return $data;
    //     // echo view('Recherche/RechercheContact', $data);
    //     // return $data;
    //     echo ($data);
    // }
    //     function recherche_contact_1(){
    //     $choix = filter_input(INPUT_POST, 'ChoixRechercheContact');
    //     $recherche = filter_input(INPUT_POST, 'search');
    //     $model = new ContactModel;
    //     $data['all'] = $model->recherche_contact($choix, $recherche);
    //     // $data =[
    //     //     'contact'   => $model->recherche_contact($choix, $recherche)
    //     // ];
    //     // return $data;
    //     // echo view('Recherche/RechercheContact', $data);
    //     // return $data;
    //     echo("$choix, $recherche, $data");
    // }

    /*
     * FONCTION TRAITANT DES ORGANISATIONS
     *
     *
     */
    public function toute_les_organisations() {
        $model = new OrganisationModel();
        $data = [
            'organisations' => $model->getOrganisation()
        ];
        echo view('organisation/ListeOrganisation', $data);
    }

    public function recherche_organisation() {
        $model = new OrganisationModel();
        $data = [
            'organisations' => $model->getOrganisation()
        ];
        echo view('organisation/RechercheOrganisation', $data);
    }

    /*
     * FONCTION TRAITANT DES LOGINS
     *
     *
     */

    public function recherche_de_login() {
        $model = new LoginModel();
        $data = [
            'logins' => $model->getLogin(),
        ];
        echo view('login/RechercheLogin', $data);
    }

    public function tout_les_login() {
        $model = new LoginModel();
        $data = [
            'logins' => $model->getLogin(),
        ];
        echo view('login/ListeLogin', $data);
    }

    /* --------------------------------------------------------
      ----------------------------------------------------------
      -------------------------------------------------------- */

    /* --------------------------------------------------------
      ----------------------------------------------------------
      -------------------------------------------------------- */

    public function Contact() {
        helper(['Recherche', 'url']);

        $model = new ContactModel();
        $model1 = new OrganisationModel();
        $model2 = new LoginModel();
        $data = [
            'contacts' => $model->getContact(),
            'organisations' => $model1->getOrganisation(),
            'logins' => $model2->getLogin(),
                //     // '' => $model->getContact
        ];
        return view('Recherche', $data);
    }

    public function formulaire_contact() {
        // //Formulaire//
        // $attributes = ['class' => 'myclass', 'id' => 'myid'];
        // echo form_open('formulaireContact2', $attributes);
        // //Fermeture du Formulaire//
        // form_close();
        // return view('FormulaireContact');
        echo view('contact/FormulaireContact');
    }

    public function add_contact() {
        // $NomContact, $PrenomContact, $MailContact, $NumeroTelContact, $IDOrganisationContact)
        //modèle//
        // form_open();
        // $model = new ContactModel;
        // print_r($model->add_contact($NomContact, $PrenomContact, $MailContact, $NumeroTelContact, $IDOrganisationContact));

        $isValid = $this->validate([
            'NomContact' => 'trim|required|min_length[1]|max_length[40]',
            'PrenomContact' => 'trim|required|min_length[1]|max_length[40]',
            'NumeroTelephoneContact' => 'trim|required|min_length[10]|max_length[10]',
            'MailContact' => 'trim|required|valid_email',
        ]);

        if (!$isValid) {
            return view('contact/accueil', [
                'validation' => \Config\Services::validation()
            ]);
        } else {
            $request = \Config\Services::request();
            $data['contact'] = $request->getPost();
            return view('contact/success', $data);
        }
    }

    public function add_ignore_contact() {
        $model = new ContactModel;
        print_r($model->add_ignore_contact());
    }

    public function compiled_add_contact() {
        $model = new ContactModel;
        print_r($model->compiled_add_contact());
    }

    public function batch_contact() {
        $model = new ContactModel;
        print_r($model->batch_contact());
    }

    public function set_update_contact($id) {
        $model = new ContactModel;
        print_r($model->set_update_contact($id));
    }

}
