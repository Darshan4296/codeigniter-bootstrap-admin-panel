<?php

namespace App\Controllers;

use App\Models\EmployeeModel;
use SebastianBergmann\CodeUnitReverseLookup\Wizard;

class EmpshowController extends BaseController
{

    public function index()
    {
        $employeeModel = new EmployeeModel();
        $data['employees'] =$employeeModel->findAll();
        return view('employee/index',$data);
    }

    public function update($id)
    {
        if (empty($id)) {
            return redirect()->back()->with('fail','Invalid request');
        }

        $employeeModel = new EmployeeModel();

        $employee = $employeeModel->find($id);

        if (empty($employee)) {
            return redirect()->back()->with('fail','Invalid request');
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'position'=> $this->request->getPost('position'),
            'office' => $this->request->getPost('office'),
            'age' => $this->request->getPost('age'),
            'date' => $this->request->getPost('date'),
            'salary' => $this->request->getPost('salary'),
        ];

        try 
        {
            $employeeModel->update($id, $data);
            return redirect()->back()->with('success','employee Updated successfully');    
        }
         catch (\Throwable $th) 
        {
            return redirect()->back()->with('fail','Error in employee Updated');
        }
    }


    public function edit($id)
    {
        
        if(empty($id))
        {
            return redirect()->to('/employee')->with('fail','Invalid Request');
        }
        $employeeModel = new EmployeeModel();
        $employee = $employeeModel->find($id);
       
        if(empty($employee))
        {
            return redirect()->to('/employee')->with('fail','Invalid Request');
        }

        return view('employee/edit',['employee'=>$employee]);
        
    }
    public function delete($id)
    {
        if(empty($id))
        {
            return redirect()->to('/employee')->with('fail','Invalid Request');
        }
        $employeeModel = new EmployeeModel();
        $employee = $employeeModel->find($id);

        if(empty($employee))
        {
            return redirect()->to('/employee')->with('fail','Invalid Request');
        }
        $employee = $employeeModel->delete($id);
        return redirect()->to('/employee')->with('success','Employee deleted successfully');


    }

}

?>