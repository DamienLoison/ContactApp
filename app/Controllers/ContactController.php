<?php

namespace App\Controllers;

use App\Models\ContactModel;
use CodeIgniter\Controller;
use CodeIgniter\Model;

// use App\Models\OrganisationModel;
// use App\Models\LoginModel;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->ContactModel = $this->db->table('contact');
    }
    public function index()
    {
        helper(['Contact', 'url']);
        // // helper("form");
        // echo form_input(data:'name', value:'', extra:'');
        // // echo form_open(action:'',attributes:'');
        // // form_open_multipart(action: ,attributes:);
        // // echo form_close();

        // $model = new ContactModel();
        // $model1 = new OrganisationModel();
        // $model2 = new LoginModel();
        // $data = [
        //     'contacts'      => $model->getContact(),
        //     'organisations' => $model1->getOrganisation(),
        //     'logins'        => $model2->getLogin(),
        //     // '' => $model->getContact

        // ];
        // |-----------------------------------------------------------------------
        // A TERMINER MAIS
        //  NECESSITE LA RECHERCHE DE COMMENT
        //  TRANSFERER LES DONNEES DE LA VUE AU CONTROLLER
        // |-----------------------------------------------------------------------
        // $sql = "SELECT * FROM Contact WHERE ID_Contact = ? AND Nom_Contact = ? AND Prenom_Contact = ?";
        // |-----------------------------------------------------------------------
        //LES POINTS D'INTERROGATIONS DOIVENT ETRE REMPLACER PAR LES BONNES DONNEES
        // |-----------------------------------------------------------------------
        //return view('FormulaireContact'); //,$data);
    }
    public function formulaire_contact()
    {
        // //Formulaire//
        // $attributes = ['class' => 'myclass', 'id' => 'myid'];
        // echo form_open('formulaireContact2', $attributes);
        // //Fermeture du Formulaire//
        // form_close();
        // return view('FormulaireContact');
        echo view('contact/FormulaireContact');
    }
    public function add_contact()
        // $NomContact, $PrenomContact, $MailContact, $NumeroTelContact, $IDOrganisationContact)
    {
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
    public function add_ignore_contact()
    {
        $model = new ContactModel;
        print_r($model->add_ignore_contact());
    }
    public function compiled_add_contact()
    {
        $model = new ContactModel;
        print_r($model->compiled_add_contact());
    }
    public function batch_contact()
    {
        $model = new ContactModel;
        print_r($model->batch_contact());
    }
    public function set_update_contact($id)
    {
        $model = new ContactModel;
        print_r($model->set_update_contact($id));
    }

    public function Accueil()
    {
        // |----------------------------------------------------------
        // Chargement du modèle de gestion des news
        // |----------------------------------------------------------
        // $this->load->model('ContactModel');
        // $data = array();
        // |----------------------------------------------------------
        // On lance une requête
        // |----------------------------------------------------------
        // $data['Contact_info'] = $this->news_model->getContact();
        // |----------------------------------------------------------
        // On inclut une vue        
        // |----------------------------------------------------------
        // $this->layout->view('test1', $data);
        // $this->load->model('ContactModel');
        // $resultat = $this->ContactModel->ajouter_Contact(
        //     'Test',
        //     'Alain',
        //     'SuperAlain@gmail.com',
        //     '0123456789',
        //     '1'
        // );
        // var_dump($resultat);
    }
    public function insertContact()
    {
        // $db = null;
        // $NomContact = $_POST['NomContact'];
        // $PrenomContact = $_POST['PrenomContact'];
        // $TelContact = $_POST['TelContact'];
        // $mailContact = $_POST['MailContact'];
        // $OrganisationContact = $_POST['OrganisationContact'];

        // $ContactModel = model('App\Models\ContactModel');
        // $ContactModel = ContactModel::insertContact($db, $NomContact, $PrenomContact, $TelContact, $mailContact, $OrganisationContact);
        // $this->load->model('ContactModel');
        // $this->$ContactModel->insertContact();
        // $this->load->view('sucess'); //affiche la vue en cas de réussite
        //return view('sucess');
    }
    //public function ajouter_Contact($NomContact, $PrenomContact, $TelContact, $MailContact, $OrganisationContact)
    // {
    //     return $this->db
    //         ->set('Nom_Contact', $NomContact)
    //         ->set('Prenom_Contact', $PrenomContact)
    //         ->set('numTel_Contact', $TelContact)
    //         ->set('mail_Contact', $MailContact)
    //         ->set('ID_Organisation', $OrganisationContact)
    //         ->insert($this->table);
    // }

    // public function setContact()
    // {
    //     $con = new PDO('mysql:host=sql.mondomaine.fr;dbname=nomdemabase;charset=utf8', 'user', 'pass');
    //     $Nom_Contact = $_POST['Nom_Contact'];
    //     $Prenom_Contact = $_POST['Prenom_Contact'];
    //     $numeroTel_Contact = $_POST['numeroTel_Contact'];
    //     $mail_Contact = $_POST['mail_Contact'];

    //     $sql = "INSERT INTO contact SET $Nom_Contact, $Prenom_Contact, $numeroTel_Contact, $mail_Contact;";
    //     $sql->execute()
    //     Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')
    // }
    // public function insertContact()
    // {
    //     // $model = new insertModel;
    //     $model = new ContactModel();
    //     // mysqli_query($db, "SELECT * FROM contact WHERE Nom_Contact = '{$Nom}'");
    //     $data = [
    //         // 'ID'            => $model->,
    //         // 'Nom'           => $model->,
    //         // 'Prenom'        => $model->,
    //         // 'Organisation'  => $model->,
    //     ];
    // }
    // public function update()
    // {
    //     $this->load->database();
    //     $this->load->model('ContactModel');
    //     $this->UserModel->update_row();
    // }

}
