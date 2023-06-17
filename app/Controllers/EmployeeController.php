<?php

namespace App\Controllers;

use App\Models\EmployeeModel;
use Throwable;

use function PHPUnit\Framework\returnArgument;

class EmployeeController extends BaseController
{
    public function add()
    {
        return view('employee/add');
    }
    public function store()
    {
        $employeeModel = new EmployeeModel();
        $data = [
            'name'=>$this->request->getPost('name'),
            'position'=>$this->request->getPost('position'),
            'office'=>$this->request->getPost('office'),
            'age'=>$this->request->getPost('age'),
            'date'=>$this->request->getPost('date'),
            'salary'=>$this->request->getPost('salary'),
        ];
        try
        {
            $query = $employeeModel->insert($data);
            return redirect()->back()->with('success','Employee Register Successfully');
        }
        catch(\Throwable $error)
        {
            return redirect()->back()->with('fail','somthing is wrong');
        }

        if(!$query)
        {
            return redirect()->back()->with('fail','something went wrong');
        }
        else
        {
            return redirect()->to('/')->with('success','you are register now');
        }
    }

    
}

?>