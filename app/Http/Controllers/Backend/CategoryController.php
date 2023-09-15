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
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        return view('backend.category.index');
    }

    public function create()
    {
        $data       = $this->category->all();
        $recusive   = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive();

        return view('backend.category.add', compact('htmlOption'));
    }

    public function store(CategoryStoreRequest $request)
    {
        $this->category->insert($request->validated());

        return redirect()->back()->with('Thành công', 'Danh mục được tạo thành công.');
    }
}
