<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ContactModel;
use App\Models\OrganisationModel;
use App\Models\LoginModel;

class Accueil extends BaseController {

    protected $session;

    public function __construct() {
        helper('form');
        $this->db = \Config\Database::connect();
        $this->ContactModel = $this->db->table('contact');
    }

    public function index() {
        $session = session();
        $data = [
            'session' => $session->get('user_name')
        ];
        echo view('Accueil', $data);
    }

    //AFFICHER CONTACT
    public function tout_les_contacts() {
        $session = session();
        if (!empty($session->get("user_name"))) {
            $model = new ContactModel();
            $model1 = new OrganisationModel();
            $data = [
                'contacts' => $model->getContact(),
                'organisations' => $model1->getOrganisation(),
            ];
            echo view('Recherche/Contact/ListeContact', $data);
        } else {
            return redirect()->to('/LoginRegisterController/login');
        }
    }

    //AJOUTER CONTACT
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

    //MODIFIER CONTACT
    public function modifier_contact($ID_Contact = null) {
        $session = session();
        if (!empty($session->get("user_name"))) {
            $contact = new ContactModel();
            $organisation = new OrganisationModel();
            $data = [
                'contact' => $contact->find($ID_Contact),
                'organisation' => $organisation->getOrganisation(),
            ];
            return view('Modifier/ModificationContact', $data);
        } else {
            return redirect()->to('/LoginRegisterController/login');
        }
    }

    public function update_contact($ID_Contact = null) {
        $contact = new ContactModel();
        $data = [
            'Nom_Contact' => $this->request->getPost('Nom_Contact'),
            'Prenom_Contact' => $this->request->getPost('Prenom_Contact'),
            'numeroTel_Contact' => $this->request->getPost('numeroTel_Contact'),
            'mail_Contact' => $this->request->getPost('mail_Contact'),
            'ID_Organisation' => $this->request->getPost('ID_Organisation'),
        ];
        $contact->update($ID_Contact, $data);

        return redirect()->to(base_url('Accueil/tout_les_contacts'))->with('status', 'Modification effectué');
    }

    //SUPPRIMER CONTACT
    public function delete_contact($ID_Contact) {
        $con = new ContactModel();
        $con->delete($ID_Contact);

        return redirect()->to(base_url('Accueil/tout_les_contacts'))->with('status', 'Suppression effectué');
    }

    //AFFICHER ORGANISATION
    public function toute_les_organisations() {
        $session = session();
        if (!empty($session->get("user_name"))) {
            $model = new OrganisationModel();
            $data = [
                'organisations' => $model->getOrganisation()
            ];
            echo view('Recherche/Organisation/ListeOrganisation', $data);
        } else {
            return redirect()->to('/LoginRegisterController/login');
        }
    }

    //AJOUTER ORGANISATION
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

    //MODIFIER ORGANISATION
    public function modifier_organisation($ID_Organisation = null) {
        $organisation = new OrganisationModel();
        $data['organisation'] = $organisation->find($ID_Organisation);

        return view('Modifier/ModificationOrganisation', $data);
    }

    public function update_organisation($ID_Organisation = null) {
        $organisation = new OrganisationModel();
        $data = [
            'Nom_Organisation' => $this->request->getPost('Nom_Organisation'),
            'Adresse_Organisation' => $this->request->getPost('Adresse_Organisation'),
            'Mail_Organisation' => $this->request->getPost('Mail_Organisation'),
            'Site_Organisation' => $this->request->getPost('Site_Organisation'),
            'Telephone_Organisation' => $this->request->getPost('Telephone_Organisation'),
        ];
        $organisation->update($ID_Organisation, $data);
        return redirect()->to(base_url('Accueil/toute_les_organisations'))->with('status', 'Modification effectué');
    }

    //SUPPRIMER ORGANISATION
    public function delete_organisation($ID_Organisation) {
        $org = new OrganisationModel();
        $org->delete($ID_Organisation);

        return redirect()->to(base_url('Accueil/toute_les_organisations'));
    }

    //AFFICHER LOGIN
    public function tout_les_login() {
        $session = session();
        if (!empty($session->get("user_name"))) {
            $model = new LoginModel();
            $data = [
                'logins' => $model->getLogin(),
            ];
            echo view('Recherche/Login/ListeLogin', $data);
        } else {
            return redirect()->to('/LoginRegisterController/login');
        }
    }

    public function afficher_login($ID_Login = null) {
        $login = new LoginModel();
        $data['login'] = $login->find($ID_Login);

        return view('Recherche/Login/AfficherLogin', $data);
    }

    //AJOUTER LOGIN
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

    //MODIFIER LOGIN
    public function modifier_login($ID_Login = null) {
        $login = new LoginModel();
        $data['login'] = $login->find($ID_Login);

        return view('Modifier/ModificationLogin', $data);
    }

    public function update_login($ID_Login = null) {
        $login = new LoginModel();
        $data = [
            'Utilisateur_Login' => $this->request->getPost('Utilisateur_Login'),
            'Password_Login' => $this->request->getPost('Password_Login'),
        ];
        $login->update($ID_Login, $data);
        return redirect()->to(base_url('Accueil/tout_les_login'))->with('status', 'Modification effectué');
    }

    //SUPPRIMER LOGIN
    public function delete_login($ID_Login) {
        $log = new LoginModel();
        $log->delete($ID_Login);

        return redirect()->to(base_url('Accueil/tout_les_login'));
    }

    //PAGE ANNEXE DE L'ACCUEIL
    public function note_patch() {
        echo view('Patch/NotePatch');
    }

    public function architecture_site() {
        echo view('pages/Architecture');
    }

    public function aide() {
        echo view('Aide');
    }

    public function me_contacter() {
        echo view('template/header');
        echo view('Reste/Contacter');
        echo view('template/footer');
    }

}
