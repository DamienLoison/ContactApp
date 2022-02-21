<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model {

    protected $table = 'login';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['Utilisateur_Login', 'Password_Login'];

    function getLogin() {
        return $this->findAll();
    }

}
