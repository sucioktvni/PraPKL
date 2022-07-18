<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Models\StaffBranch;
use App\Models\_staff;
use App\Models\branch;

class StaffBranchController extends Controller
{
    //
    public function index()
    {
        // select * from post;
        $StaffBranch = StaffBranch::all();
        $_staff = _staff::all();
        $branch = branch::all();

        return view('migration.StaffBranch', compact('StaffBranch','_staff','branch'));
    }
}
