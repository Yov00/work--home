<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
class CompanyController extends Controller
{
    public function create()
    {
        $title ="Create Company";
        return view('pages.create_company',compact('title'));
    }
    public function store()
    {
        $validated = request()->validate([
            'name'=>['required','min:3'],
            'phone'=>['required','min:10']
        ]);
        Company::create($validated);
        return redirect('/');
    }

    public function show(Company $company)
    {
        $title ="Previewing ".$company->name;
        return view('pages.show')->with([
            'company'=>$company,
            'title'=>$title
        ]);
    }

    public function edit(Company $company)
    {
        $title = "Edit";

        return view('pages.company_edit')->with([
            'company' =>$company,
            'title'   => $title
        ]);

    }

    

    public function update(Company $company)
    {
        
        $company->update(request(['name','phone']));
        return redirect('/');
    }
 
    public function destroy(Company $company)
    {
        $company->delete();

        return redirect('/');
    }
    
}
