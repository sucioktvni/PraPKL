<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class _staffController extends Controller
{
    //
    public function index()
    {
        // select * from post;
        $_staff = _staff::all();
        return view('migration._staff', compact('_staff'));
    }
}
