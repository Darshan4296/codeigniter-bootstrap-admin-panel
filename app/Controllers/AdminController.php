<?php

namespace App\Controllers;

use App\Models\UsersModel;

class AdminController extends BaseController
{
    public function __construct()
    {
        if(empty(session()->get('loggedUser')))
        {
            header(sprintf('location: %s', site_url('page/login')));
            exit;
        }
        
        $userModel = new UsersModel();
        $userSession = session()->get('loggedUser');

        if ($userSession['id']) {
            $user = $userModel->find($userSession['id']);

            if (empty($user)) {
                header(sprintf('location: %s', site_url('logout')));
            }
            session()->set('loggedUser', $user);
        }
    }
}

?>