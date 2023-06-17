<?php

namespace App\Controllers;

class TableController extends AdminController
{
    public function index()
    {
        return view('table/table');
    }
}

?>