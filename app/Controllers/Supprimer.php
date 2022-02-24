<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ContactModel;
use App\Models\OrganisationModel;
use App\Models\LoginModel;

/**
 * Description of Supprimer
 *
 * @author utilisateur
 */
class Supprimer extends Controller {

    public $ContactModel;
    public $OrganisationModel;
    public $LoginModel;

    public function __construct() {
        $this->db = \Config\Database::connect();
    }

    //----- ----- ----- ----- //
    //      SUPPRESSION       //
    //      DE CONTACT        //
    //----- ----- ----- ----- //
    public function supprimer_contact() {
        echo view("Suppression/Contact/form");
    }

    public function supprimer_contact_record() {
        $ContactModel = new ContactModel();
        $ContactModel->delete($_POST);
        echo view("Suppression/Contact/form");
    }

    //----- ----- ----- ----- //
    //      SUPPRESSION       //
    //      D'ORGANISATION    //
    //----- ----- ----- ----- //
    public function supprimer_organisation() {
        echo view("Suppression/Organisation/form");
    }

    public function supprimer_organisation_record() {
        $OrganisationModel = new OrganisationModel();
        $OrganisationModel->delete($_POST);
        echo view("Suppression/Organisation/form");
    }

    //----- ----- ----- ----- //
    //      SUPPRESSION       //
    //      DE LOGIN          //
    //----- ----- ----- ----- //
    public function supprimer_login() {
        echo view("Suppression/Login/form");
    }

    public function supprimer_login_record() {
        $LoginModel = new $LoginModel();
        $LoginModel->delete($_POST);
        echo view("Suppression/Login/form");
    }

}
