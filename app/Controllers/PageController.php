<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Commands\Database\Seed;
use Config\Session;

class pageController extends BaseController
{
    public function __construct()
    {

    }

    public function register()
    {
        if(!empty(session()->get('loggedUser')))
        {
            header(sprintf('location: %s', site_url('/')));
            exit;
        }
        return view('page/register');
    }
    public function login()
    {
        if(!empty(session()->get('loggedUser')))
        {
            header(sprintf('location: %s', site_url('/')));
            exit;
        }
        return view('page/login');
    }
    public function store()
    {
        $userModel = new UsersModel();
        
        $data = [
            'firstname' =>$this->request->getPost('firstname'),
            'lastname'=>$this->request->getPost('lastname'),
            'email'=>$this->request->getPost('email'),
            'password'=>$this->request->getPost('password'),
        ];
        
        try {
            $query = $userModel->insert($data); 
            return redirect()->back()->with('success','Register Successfully');
        } catch(\Throwable $error) {
            return redirect()->back()->with('fail','somthing is wrong');
        }

        if(!$query) {
            return redirect()->back()->with('fail','something went wrong');
        } else {
            return redirect()->to('/')->with('success','you are now register');
        }
    }
    public function check()
    {
        $password = $this->request->getPost('password');
        $email = $this->request->getPost('email');

        $userModel = new UsersModel();
        $user = $userModel->where('email', $email)->first();
       
        if (!empty($user) && $password == $user['password']) {
            session()->set('loggedUser', $user);
            return redirect()->to('/')->with('success','Login successfully!');
        }

        return redirect()->back()->with('fail','Incorrect login request');
    }

    public function logout()
    {
        if(session()->has('loggedUser'))
        {
            session()->remove('loggedUser');
            return redirect()->to('page/login')->with('fail','you are logged out!');
        }

        return redirect()->back()->with('fail','User is already logged out!');
    }
}

?>