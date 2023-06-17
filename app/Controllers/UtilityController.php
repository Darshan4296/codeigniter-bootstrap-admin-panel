<?php

namespace App\Controllers;

class UtilityController extends BaseController
{
    public function color()
    {
        return view('utility/color');
    }
    public function border()
    {
        return view('utility/border');
    }
    public function animation()
    {
        return view('utility/animation');
    }
    public function other()
    {
        return view('utility/other');
    }
}
