<?php

namespace App\Controllers;

use App\Models\ContactModel;
use App\Models\OrganisationModel;
use App\Models\LoginModel;
use CodeIgniter\Controller;

class Recherche extends Controller {

    public function __construct() {
        $this->db = \Config\Database::connect();
        $this->ContactModel = $this->db->table('contact');
    }

    public function index() {
        helper(['Contact', 'url']);
        $session = session();
        if (!empty($session->get("user_name"))) {
            echo view('template/header');
            echo view('Recherche/AccueilRecherche');
            echo view('template/footer');
        } else {
            return redirect()->to('/LoginRegisterController/login');
        }
    }

    //
    //FONCTION TRAITANT DES CONTACTS
    // 

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
//            'Nom_Organisation_Contact' => $this->request->getPost('Nom_Organisation_Contact'),
        ];
        $contact->update($ID_Contact, $data);

        return redirect()->to(base_url('Recherche/tout_les_contacts'))->with('status', 'Modification effectué');
    }

    public function delete_contact($ID_Contact) {
        $con = new ContactModel();
        $con->delete($ID_Contact);

        return redirect()->to(base_url('Recherche/tout_les_contacts'))->with('status', 'Suppression effectué');
    }

    //
    // FONCTION TRAITANT DES ORGANISATIONS
    //

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
        return redirect()->to(base_url('Recherche/toute_les_organisations'))->with('status', 'Modification effectué');
    }

    public function delete_organisation($ID_Organisation) {
        $org = new OrganisationModel();
        $org->delete($ID_Organisation);

        return redirect()->to(base_url('Recherche/toute_les_organisations'));
    }

    //
    //FONCTION TRAITANT DES LOGINS
    //

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
        return redirect()->to(base_url('Recherche/tout_les_login'))->with('status', 'Modification effectué');
    }

    public function delete_login($ID_Login) {
        $log = new LoginModel();
        $log->delete($ID_Login);

        return redirect()->to(base_url('Recherche/tout_les_login'));
    }

}
