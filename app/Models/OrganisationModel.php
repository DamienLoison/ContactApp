<?php

namespace App\Models;

use CodeIgniter\Model;

class OrganisationModel extends Model
{
    protected $table = 'organisation';

    function getOrganisation()
    {
        return $this->findAll();
    }
}
