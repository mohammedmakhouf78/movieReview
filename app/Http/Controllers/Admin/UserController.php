<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPUnit\Framework\fileExists;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.Pages.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.Pages.user.create');
    }

    public function store(StoreUserRequest $request)
    {
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $filename ?? '',
        ]);
        if ($request->type == 'viewer') {
            $user->attachRole('viewer');
        } else if ($request->type == 'editor') {
            $user->attachRole('editor');
        } else if ($request->type == 'admin') {
            $user->attachRole('admin');
        }
        Alert::success('Success Title', 'User Was Created');
        return redirect(route('admin.user.index'));
    }

    public function edit(user $user)
    {
        return view('admin.Pages.user.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {

        $data = $request->validated();
        if ($request->file('image')) {
            if (fileExists(public_path('images/' . $user->image))) {
                File::delete(public_path('images/' . $user->image));
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data['image'] = $filename;
        }
        $user->update($data);
        if ($request->type == 'viewer') {
            $user->attachRole('viewer');
        } else if ($request->type == 'editor') {
            $user->attachRole('editor');
        } else if ($request->type == 'admin') {
            $user->attachRole('admin');
        }
        Alert::success('Success Title', 'User Was Updated');
        return redirect(route('admin.user.index'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        Alert::success('Success Title', 'User Was Deleted');
        return redirect(route('admin.user.index'));
    }
}
