<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ContactModel;
use App\Models\OrganisationModel;
use App\Models\LoginModel;

class Ajouter extends Controller {

    public $ContactModel;

    public function __construct() {
        helper('form');
        $this->ContactModel = new ContactModel();
    }

    /* --------------------------------|
     * --------------------------------|
     * --------------------------------|
     * --------------------------------|
     * ------------ACCUEIL-------------|
     * --------------------------------|
     * --------------------------------|
     * --------------------------------|
     * --------------------------------| */

    public function ajouter_accueil() {
        echo view("Ajout/accueil");
    }

    /* --------------------------------|
     * --------------------------------|
     * --------------------------------|
     * --------------------------------|
     * ------------CONTACT-------------|
     * --------------------------------|
     * --------------------------------|
     * --------------------------------|
     * --------------------------------| */

    public function ajouter_contacter() {
        echo view("Ajout/Contact/formulaire");
    }

    public function ajouter_contact_record() {
        $ContactModel = new ContactModel();
        $ContactModel->insert($_POST);
        echo view("Ajout/Contact/formulaire");
    }

    /* --------------------------------|
     * --------------------------------|
     * --------------------------------|
     * --------------------------------|
     * ---------ORGANISATION-----------|
     * --------------------------------|
     * --------------------------------|
     * --------------------------------|
     * --------------------------------| */

    public function ajouter_organisation() {
        echo view("Ajout/Organisation/form");
    }

    public function ajouter_organisation_record() {
        $OrganisationModel = new OrganisationModel();
        $OrganisationModel->insert($_POST);
        echo view("Ajout/Organisation/form");
    }

    /* --------------------------------|
     * --------------------------------|
     * --------------------------------|
     * --------------------------------|
     * -------------LOGIN--------------|
     * --------------------------------|
     * --------------------------------|
     * --------------------------------|
     * --------------------------------| */

    public function ajouter_login() {
        echo view("Ajout/Login/form");
    }

    public function ajouter_login_record() {
        $LoginModel = new LoginModel();
        $LoginModel->insert($_POST);
        echo view("Ajout/Login/form");
    }

}
