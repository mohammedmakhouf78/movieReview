<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\User;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPUnit\Framework\fileExists;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);
        return view('admin.Pages.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::get();
        $users = User::get();
        return view('admin.Pages.product.create', compact('categories', 'users'));
    }

    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data['image'] = $filename;
        }
        $data['user_id'] = $request->user_id;
        Product::create($data);
        Alert::success('Success Title', 'Product Was Created');
        return redirect()->back();
    }

    public function edit(Product $product)
    {
        $categories = Category::get();
        $users = User::get();
        return view('admin.Pages.product.edit', compact('categories', 'users', 'product'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->all();
        if ($request->file('image')) {
            if (fileExists(public_path('images/' . $product->image))) {
                File::delete(public_path('images/' . $product->image));
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data['image'] = $filename;
        }
        $data['is_approved'] = isset($data['is_approved']) ? $data['is_approved'] : 0;
        $product->update($data);
        Alert::success('Success Title', 'Product Was Updated');
        return redirect(route('admin.product.index'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        Alert::success('Success Title', 'Product Was Deleted');
        return redirect(route('admin.product.index'));
    }
}
