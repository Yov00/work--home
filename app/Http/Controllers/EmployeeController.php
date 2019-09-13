<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Company;
class EmployeeController extends Controller
{
    public function create()
    {
        $title ="Create Employee";
        return view('pages.create_Employee',compact('title'));
    }
    public function store(Company $company)
    {
       
        Employee::create([
            'name'=>request('name'),
            'Job_title'=>request('Job_title'),
            'company_id'=>$company->id,
            'manager_id'=>request('manager_id')
        ]);
        return back();
    }

    public function show(Employee $employee)
    {
        $title ="Previewing ".$employee->name;
        return view('pages.show')->with([
            'Employee'=>$employee,
            'title'=>$title
        ]);
    }

    public function edit(Employee $employee)
    {
        $title = "Edit";

        return view('pages.employee_edit')->with([
            'Employee' =>$employee,
            'title'   => $title
        ]);

    }

    

    public function update(Employee $employee)
    {
        
        $employee->update(request(['name','phone']));
        return redirect('/');
    }
 
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect('/');
    }
    
}
