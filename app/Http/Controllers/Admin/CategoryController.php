<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(5);
        return view('admin.Pages.Category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.Pages.Category.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->validated());
        Alert::success('Success Title', 'Category Was Created');
        return redirect(route('admin.category.index'));
    }

    public function edit(Category $category)
    {
        return view('admin.Pages.Category.edit', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        Alert::success('Success Title', 'Category Was Updated');
        return redirect(route('admin.category.index'));
    }


    public function destroy(Category $category)
    {
        $category->delete();
        Alert::success('Success Title', 'Category Was Deleted');
        return redirect(route('admin.category.index'));
    }
}
