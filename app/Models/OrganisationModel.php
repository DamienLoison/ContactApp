<?php

namespace App\Models;

use CodeIgniter\Model;

class OrganisationModel extends Model
{
    protected $table = 'organisation';
    protected $useAutoIncrement = true;

    function getOrganisation()
    {
        return $this->findAll();
    }
}
