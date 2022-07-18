<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class branchController extends Controller
{
    public function index()
    {
        // select * from post;
        $branch = branch::all();
        return view('migration.branch', compact('branch'));
    }
    //
}
