<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPUnit\Framework\fileExists;

class ViewerController extends Controller
{
    public function profile()
    {
        return view('front.pages.viewer.profile');
    }

    public function edit(User $user)
    {
        return view('front.pages.viewer.edit', compact('user'));
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
        Alert::success('Success Title', 'User Was Updated');
        return redirect(route('home.viewer.profile'));
    }
}
