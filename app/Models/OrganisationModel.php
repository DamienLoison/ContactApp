<?php

namespace App\Models;

use CodeIgniter\Model;

class OrganisationModel extends Model {

    protected $table = 'organisation';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['Nom_Organisation', 'Adresse_Organisation', 'Mail_Organisation', 'Site_Organisation', 'Telephone_Organisation'];

    function getOrganisation() {
        return $this->findAll();
    }

}
