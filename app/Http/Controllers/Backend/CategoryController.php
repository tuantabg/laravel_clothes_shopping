<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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
