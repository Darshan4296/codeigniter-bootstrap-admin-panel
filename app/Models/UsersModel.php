<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'profile';

    protected $primarykey = 'id';

    protected $allowedFields = ['firstname','lastname','email','password'];
}

?>