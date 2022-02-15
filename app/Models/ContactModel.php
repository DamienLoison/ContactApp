<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\BaseBuilder;
use CodeIgniter\Database\MySQLi\Builder;

class ContactModel extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'ID_Contact';
    protected $useAutoIncrement = true;

    protected $db;
    protected $id;
    // Récupération des données
    // protected $nom_contact;
    // protected $prenom_contact;
    // protected $numeroTel_contact;
    // protected $mail_contact;

    // protected $allowedFields = [
    //     'Nom_Contact',
    //     'Prenom_Contact',
    //     'numeroTel_Contact',
    //     'mail_Contact',
    //     'OrganisationContact',
    // ];
    public function __construct()
    {
        parent::__construct();
        $this->db = db_connect();
    }
    // /**
    //  * Ajoute un contact
    //  *
    //  * @param string $NomContact le nom du contact
    //  * @param string $PrenomContact le nom du contact
    //  * @param string $mailContact le mail du contact
    //  * @param string $TelContact le numéro de téléphone du contact
    //  * @param string $OrganisationContact l'organisation où travail le contact
    //  */
    // public function ajouter_contact($NomContact, $PrenomContact, $mailContact, $TelContact, $OrganisationContact)
    // {
    //     // Ces données seront automatiquement échappées
    //     $this->db->set('NomContact', $NomContact);
    //     $this->db->set('PrenomContact', $PrenomContact);
    //     $this->db->set('mailContact', $mailContact);
    //     $this->db->set('TelContact', $TelContact);
    //     $this->db->set('OrganisationContact', $OrganisationContact);

    //     return $this->db->insert($this->table);
    // }

    // public function editer_contact()
    // {
    // }
    // /**
    //  * Supprime un contact
    //  */
    // public function supprimer_contact()
    // {
    // }
    // /**
    //  * Retourne le nombre de contact
    //  */
    // public function count()
    // {
    // }
    // /**
    //  * Retourne une liste de contact
    //  */
    // public function liste_contact()
    // {
    // }

    //test méthode ytb
    public function add_contact()
    {
        $builder = $this->db->table('contact');
        $data = [
            'Nom_Contact'           => 'TEST2',
            'Prenom_Contact'        => 'Jtest2',
            'mail_Contact'          => 'Test@test.fr',
            'numeroTel_Contact'     => '0000000001',
            'ID_Organisation'       => '1'
        ];
        $builder->insert($data);
        return $this->db->affectedRows();
    }

    public function add_ignore_contact()
    {
        $builder = $this->db->table('contact');
        $data = [
            'ID_Contact'            => '',
            'Nom_Contact'           => '',
            'Prenom_Contact'        => '',
            'mail_Contact'          =>  '',
            'numeroTelContact'      => '',
            'Organisation_Contact'  => ''
        ];
        $builder->ignore(true)->insert($data);
        return $this->db->affectedRows();
    }
    public function compiled_add_contact()
    {
        $data = [
            'Nom_Contact'           => '',
            'Prenom_Contact'        => '',
            'mail_Contact'          =>  '',
            'numeroTelContact'      => '',
            'Organisation_Contact'  => ''
        ];
        $builder = $this->db->table('contact');
        $sql = $builder->set($data)->getCompiledInsert();
        return $sql;
    }
    // public function batch_contact(){

    // }
    public function replace_contact()
    {
        $builder = $this->db->table('contact');
        $data = [
            'ID_Contact'            => '',
            'Nom_Contact'           => '',
            'Prenom_Contact'        => '',
            'mail_Contact'          =>  '',
            'numeroTelContact'      => '',
            'Organisation_Contact'  => ''
        ];
        $builder->replace($data);
        return $this->db->affectedRows();
    }

    //-------------------------------------------------------------//
    //-------------------------------------------------------------//
    //-------------------------------------------------------------//
    // public function set_update_nom_contact()
    // {
    //     $builder  = $this->db->table('contact');
    //     $data = [
    //         'Nom_Contact'           => '',
    //     ];
    //     $builder->set($data);
    //     $builder->where('id', $id);
    //     $builder->update();
    //     return $this->db->affectedRows();
    // }
    // public function set_update_prenom_contact()
    // {
    //     $builder  = $this->db->table('contact');
    //     $data = [
    //         'Prenom_Contact'        => '',
    //     ];
    //     $builder->set($data);
    //     $builder->where('id', $id);
    //     $builder->update();
    //     return $this->db->affectedRows();
    // }
    // public function set_update_mail_contact()
    // {
    //     $builder  = $this->db->table('contact');
    //     $data = [
    //         'mail_Contact'          =>  '',
    //     ];
    //     $builder->set($data);
    //     $builder->where('id', $id);
    //     $builder->update();
    //     return $this->db->affectedRows();
    // }
    // public function set_update_numero_telephone_contact()
    // {
    //     $builder  = $this->db->table('contact');
    //     $data = [
    //         'numeroTelContact'      => '',
    //     ];
    //     $builder->set($data);
    //     $builder->where('id', $id);
    //     $builder->update();
    //     return $this->db->affectedRows();
    // }
    // public function set_update_organisation_contact()
    // {
    //     $builder  = $this->db->table('contact');
    //     $data = [
    //         'Organisation_Contact'  => ''

    //     ];
    //     $builder->set($data);
    //     $builder->where('id', $id);
    //     $builder->update();
    //     return $this->db->affectedRows();
    // }
    public function set_update_contact($id)
    {
        if (!empty('Nom_Contact')) {
            $builder  = $this->db->table('contact');
            $data = [
                'Nom_Contact'           => '',
            ];
            $builder->set($data);
            $builder->where('id', $id);
            $builder->update();
            return $this->db->affectedRows();
        } else {
            if (!empty('Prenom_Contact')) {
                $builder  = $this->db->table('contact');
                $data = [
                    'Prenom_Contact'        => '',
                ];
                $builder->set($data);
                $builder->where('id', $id);
                $builder->update();
                return $this->db->affectedRows();
            } else {
                if (!empty('mail_Contact')) {
                    $builder  = $this->db->table('contact');
                    $data = [
                        'mail_Contact'          =>  '',
                    ];
                    $builder->set($data);
                    $builder->where('id', $id);
                    $builder->update();
                    return $this->db->affectedRows();
                } else {
                    if (!empty('numeroTel_Contact')) {
                        $builder  = $this->db->table('contact');
                        $data = [
                            'numeroTelContact'      => '',
                        ];
                        $builder->set($data);
                        $builder->where('id', $id);
                        $builder->update();
                        return $this->db->affectedRows();
                    } else {
                        if (!empty('Organisation_Contact')) {
                            $builder  = $this->db->table('contact');
                            $data = [
                                'Organisation_Contact'  => ''

                            ];
                            $builder->set($data);
                            $builder->where('id', $id);
                            $builder->update();
                            return $this->db->affectedRows();
                        } else {
                            echo 'Aucune valeur modifier !';
                        }
                    }
                }
            }
        }
    }

    //Affiche l'ensemble des données 
    public function getContact()
    {
        //variables utilisé
        // $id = $RechercheID;
        // $Nom = $RechercheNom;
        // $Prenom = $RecherchePrenom;
        // $Organisation = $RechercheOrganisation;

        // if($id != null){
        //si la recherche doit s'effectué par id
        //mysqli_query($db, "SELECT * FROM contact WHERE ID_Contact = '{$id}'");
        // }
        // if($Nom != null){
        //recherche effectué par le Nom
        //mysqli_query($db, "SELECT * FROM contact WHERE Nom_Contact = '{$Nom}'");
        //}
        // if($Prenom != null){
        //recherche effectué par le Prénom
        //mysqli_query($db, "SELECT * FROM contact WHERE Prenom_Contact = '{$Prenom}'");
        //}
        // if($Organisation != null){
        //recherche effectué par l'Organisation
        //mysqli_query($db, "SELECT * FROM contact WHERE ID_Organisation = '{$Organisation}'");
        //}


        return $this->findAll();
    }
    // public function insertContact()
    // {
    //     $f1 = $_POST['f1'];
    //     $f2 = $_POST['f2'];
    //     $f3 = $_POST['f3'];
    //     $f4 = $_POST['f4'];
    //     $f5 = $_POST['f5'];
    //     $this->db->query("INSERT INTO contact VALUES('$f1','$f2','$f3','$f4','$f5')");

    // }
    // public static function insertContact($db, $NomContact, $PrenomContact, $TelContact, $MailContact, $OrganisationContact)
    // {
    //     if ($PrenomContact != null && $NomContact != null && $TelContact != null && $OrganisationContact != null) {
    //         $sql = "INSERT INTO mytable (Nom_Contact, Prenom_Contact, numeroTel_Contact, mail_Contact, ID_Organisation)
    //     VALUES (" . $NomContact . ",
    //     " . $PrenomContact . ",
    //     " . $TelContact . ",
    //     " . $MailContact . ",
    //     " . $OrganisationContact . ",
    //     )";
    //         // $db->query($sql);
    //         // echo $db->affectedRows();
    //     }
    //     //afficher les erreurs 
    //     //le nom du contact est null !!!
    //     else {
    //         echo 'erreur null';
    //     }
    //     if ($PrenomContact != null && $NomContact != null && $TelContact != null) {
    //         echo 'id Orga null';
    //     }
    //     if ($PrenomContact != null && $NomContact != null && $OrganisationContact != null) {
    //         echo 'numéro tel null';
    //     }
    //     if ($PrenomContact != null && $TelContact != null && $OrganisationContact != null) {
    //         echo 'Nom null';
    //     }
    //     if ($NomContact != null && $TelContact != null && $OrganisationContact != null) {
    //         echo 'Prenom null';
    //     }
    // }
    // function getNomContact()
    // {
    //     return $this->find($user_id);
    // }
    // function getPrenomContact()
    // {
    //     return $this->find();
    // }
    // function getMailContact()
    // {
    //     return $this->find();
    // }
    // function getNumeroTelContact()
    // {
    //     return $this->find();
    // }
}
