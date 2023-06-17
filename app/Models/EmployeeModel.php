<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'employee';

    protected $primarykey = 'id';

    protected $allowedFields = ['name','position','office','age','startdate','salary'];
}

?>