<?php

namespace App\Controllers;

class DashboardController extends AdminController
{
    public function dashboard()
    {
        return view('dashboard/dashboard');
    }
    
}

?>