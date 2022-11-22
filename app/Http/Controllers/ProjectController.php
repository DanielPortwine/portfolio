<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProjectController extends Controller
{
    public function view($name)
    {
        if (!View::exists('projects.'.$name)) {
            abort(404);
        }

        return view('projects.'.$name);
    }
}
