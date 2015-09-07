<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function index()
    {
        $name = 'Dasun Kanishka';
        $age = '23';

        return view("pages.index", compact('name', 'age'));
    }

    public function about()
    {
        return view("pages.about");
    }

}
