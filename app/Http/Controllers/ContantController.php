<?php

namespace App\Http\Controllers;

use App\Models\tasks;
use Illuminate\Http\Request;

class ContantController extends Controller
{
    public function home ()
    {

        $tasks = tasks::get();

        return view('contant.home', compact('tasks'));

    }
}
