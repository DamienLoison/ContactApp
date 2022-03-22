<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ContactModel;
use App\Models\OrganisationModel;
use App\Models\LoginModel;

class Ajouter extends Controller {

    public $ContactModel;
    public $OrganisationModel;
    public $LoginModel;

    public function __construct() {
        helper('form');
        $this->ContactModel = new ContactModel();
    }

    /* --------------------------------|
     * ------------ACCUEIL-------------|
     * --------------------------------| */

    public function ajouter_accueil() {
        $session = session();
        if (!empty($session->get("user_name"))) {
            echo view("Ajout/accueil");
        } else {
            return redirect()->to('/LoginRegisterController/login');
        }
    }

    /* --------------------------------|
     * ------------CONTACT-------------|
     * --------------------------------| */

    public function ajouter_contact() {
        $session = session();
        if (!empty($session->get("user_name"))) {
            $model = new OrganisationModel();
            $data = [
                'organisations' => $model->getOrganisation()
            ];
            echo view("Ajout/Contact/formulaire", $data);
        } else {
            return redirect()->to('/LoginRegisterController/login');
        }
    }

    public function ajouter_contact_record() {
        $session = session();
        if (!empty($session->get("user_name"))) {
            $model = new OrganisationModel();
            $data = [
                'organisations' => $model->getOrganisation()
            ];
            $ContactModel = new ContactModel();
            $ContactModel->insert($_POST);
            echo view("Ajout/Contact/formulaire", $data);
        } else {
            return redirect()->to('/LoginRegisterController/login');
        }
    }

    /* --------------------------------|
     * ---------ORGANISATION-----------|
     * --------------------------------| */

    public function ajouter_organisation() {
        $session = session();
        if (!empty($session->get("user_name"))) {
            $model = new OrganisationModel();
            $data = [
                'organisations' => $model->getOrganisation()
            ];
            echo view("Ajout/Organisation/form", $data);
        } else {
            return redirect()->to('/LoginRegisterController/login');
        }
    }

    public function ajouter_organisation_record() {
        $session = session();
        if (!empty($session->get("user_name"))) {
            $OrganisationModel = new OrganisationModel();
            $OrganisationModel->insert($_POST);
            echo view("Ajout/Organisation/form");
        } else {
            return redirect()->to('/LoginRegisterController/login');
        }
    }

    /* --------------------------------|
     * -------------LOGIN--------------|
     * --------------------------------| */

    public function ajouter_login() {
        $session = session();
        if (!empty($session->get("user_name"))) {
            echo view("Ajout/Login/form");
        } else {
            return redirect()->to('/LoginRegisterController/login');
        }
    }

    public function ajouter_login_record() {
        $session = session();
        if (!empty($session->get("user_name"))) {
            $LoginModel = new LoginModel();
            $LoginModel->insert($_POST);
            echo view("Ajout/Login/form");
        } else {
            return redirect()->to('/LoginRegisterController/login');
        }
    }

}
