<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\CategoryStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Components\Recusive;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('backend.category.index', compact('categories'));
    }

    public function create()
    {
        $data       = Category::all();
        $recusive   = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive();

        return view('backend.category.add', compact('htmlOption'));
    }

    public function store(CategoryStoreRequest $request)
    {
        Category::insert($request->validated());

        return redirect()->back()->with('success', 'Tạo danh mục thành công');
    }

    public function edit($id)
    {
        $category   = Category::findOrFail($id);

        return view('backend.category.add', compact('category', 'category'));
    }
}
