<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
class PagesController extends Controller
{
    public function index()
    {   
        $title = "Home";
        $companies = Company::all();

        return view('pages.index')->with([
            'companies'=>$companies,
            'title'=>$title
        ]);
    }
}
