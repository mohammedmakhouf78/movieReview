<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPUnit\Framework\fileExists;

class EditorController extends Controller
{
    public function profile()
    {
        return view('front.pages.editor.profile');
    }

    public function edit(User $user)
    {
        return view('front.pages.editor.edit',compact('user'));
    }

    public function update(UpdateUserRequest $request,User $user)
    {
        $data=$request->validated();
        $data['password']=Hash::make($data['password']);
        if($request->file('image')){
            if(fileExists(public_path('images/' . $user->image)))
            {
                File::delete(public_path('images/' . $user->image));
            }
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images'), $filename);
            $data['image'] = $filename;
        }
        $user->update($data);
        Alert::success('Success Title', 'User Was Updated');
        return redirect(route('home.editor.profile'));
    }

    public function movieCreate()
    {
        $categories = Category::get();
        return view('front.pages.editor.movieCreate',compact('categories'));
    }

    public function movieStore(StoreProductRequest $request)
    {
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images'), $filename);
            $data['image'] = $filename;
        }

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->id,
            'image' => $filename ?? ''
        ]);

        Alert::success('Success Title', 'Movie Was Created Successfully !!!');
        return redirect()->back();
    }
}
