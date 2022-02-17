<?php

namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'ID_Contact';
    protected $allowedFields = ['Nom_Contact', 'Prenom_Contact', 'numTel_Contact', 'mail_Contact', 'ID_Organisation'];
    protected $useAutoIncrement = true;
}
