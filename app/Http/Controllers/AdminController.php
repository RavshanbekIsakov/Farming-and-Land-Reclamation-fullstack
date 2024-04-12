<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function auth(Request $request){
        $request->validate([
            'username' => "required|string",
            'password' => "required|string",
        ]);
        $admin = Admin::where('username', $request->username)->first();
//        return Hash::make($request->password);
        if (!empty($admin)){
            if (Hash::check($request->password, $admin->password)){
                session()->put('admin',1);
                session()->put('id',$admin->id);
                session()->put('fullname',$admin->fullname);
                session()->put('photo',$admin->photo);
                return redirect()->route('admin.profile');
            }
            else{
                return back()->with("login_error",1);
            }
        }
        else{
            return back()->with("login_error",1);
        }
    }

    public function logout(){
        session()->flush();
        return redirect()->route('admin.login');
    }

    public function update_password(Request $request){
        if ($request->password1 != $request->password2){
            return back()->with('logic_error',1);
        }
        else{
            $p = Hash::make($request->password1);
            $admin = Admin::find(session('id'));
            $admin->password = $p;
            $admin->save();
            return back()->with('success',1);
        }
    }

    public function updatePhoto(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Example validation rules
        ]);

        $photo = $request->file('photo');

        $filename = time() . '.' . $photo->getClientOriginalExtension();

        $photo->storeAs('public/images', $filename);

        $admin = Auth::guard('admin')->user();

        $admin->photo = $filename;
        $admin->save();

        return redirect()->back()->with('success', 'Photo updated successfully');
    }

}
