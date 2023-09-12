<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('backend.category.add');
    }

    public function index()
    {
        return view('backend.category.index');
    }
}
