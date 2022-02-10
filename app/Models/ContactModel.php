<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'ID_Contact';
    protected $useAutoIncrement = true;
    // Récupération des données
    // protected $nom_contact;
    // protected $prenom_contact;
    // protected $numeroTel_contact;
    // protected $mail_contact;

    protected $allowedFields = [
        'Nom_Contact',
        'Prenom_Contact',
        'numeroTel_Contact',
        'mail_Contact',
    ];

    function getContact()
    {
        return $this->findAll();
    }
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
