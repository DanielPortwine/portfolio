<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BlogController extends Controller
{
    public function view($name)
    {
        if (!View::exists('blog.'.$name)) {
            abort(404);
        }

        return view('blog.'.$name);
    }
}
