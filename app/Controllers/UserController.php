<?php

namespace App\Controllers;

use App\Models\UsersModel;

class UserController extends AdminController
{
    public function index()
    {
        $userModel = new UsersModel();
        $data['users'] = $userModel->findAll();
        return view('page/index',$data);
    }

    public function update($id)
    {
        if (empty($id)) {
            return redirect()->back()->with('fail','Invalid request');
        }

        $userModel = new UsersModel();

        $user = $userModel->find($id);

        if (empty($user)) {
            return redirect()->back()->with('fail','Invalid request');
        }

        $data = [
            'firstname' => $this->request->getPost('firstname'),
            'lastname' => $this->request->getPost('lastname'),
            'email' => $this->request->getPost('email'),
        ];

        if (!empty($this->request->getPost('password'))) {
            $data['password'] = $this->request->getPost('password');
        }

        try {
            $userModel->update($id, $data);
            return redirect()->back()->with('success','User Updated successfully');    
        } catch (\Throwable $th) {
            return redirect()->back()->with('fail','Error in User Updated');
        }
    }

    public function edit($id)
    {
        if (empty($id)) {
            return redirect()->to('/page')->with('fail', 'Invalid request');
        }
        
        $userModel = new UsersModel(); 
        $user = $userModel->find($id);
        
        if (empty($user)) {
            return redirect()->to('/users')->with('fail', 'Invalid request');
        }

        return view('page/edit', ['user' => $user]);
    }

    public function delete($id)
    {
        if (empty($id)) {
            return redirect()->to('/page')->with('fail', 'Invalid request.');
        }
        
        $userModel = new UsersModel();
        $user = $userModel->find($id);
        
        if (empty($user)) {
            return redirect()->to('/page')->with('fail', 'Invalid request');
        }
        $user = $userModel->delete($id);
        return redirect()->to('/page')->with('success', 'User deleted successfully!');
    }
}


?>