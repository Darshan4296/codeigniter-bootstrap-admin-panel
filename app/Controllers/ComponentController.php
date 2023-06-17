<?php

namespace App\Controllers;

class ComponentController extends AdminController
{
    public function button()
    {
        return view('button/button');
    }
    public function cards()
    {
        return view('cards/cards');
    }
}

?>