<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Articles;
use App\Models\PracticalTrainings;
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


    public function articles(){
        $articles = Articles::get();
        return view('admin.articles', ['articles' => $articles]);
    }

    public function add_articles(Request $request){
//        dd($request);
        $request->validate([
            'image' => 'required|image|max:2048',
            'name' => 'required|string',
            'file' => 'required|file'
        ]);
        $org_name = $request->file('image')->getClientOriginalName();
        $microTime = md5(microtime());
        $photo_name = $microTime.$org_name;
        $request->file('image')->move('img/articles/',$photo_name);

        $file_org_name = $request->file('file')->getClientOriginalName();
        $microTime = md5(microtime());
        $file_name = $microTime.$file_org_name;
        $request->file('file')->move('books/',$file_name);



        $project = new Articles();
        $project->article_name = $request->name;
        $project->article_photo = $photo_name;
        $project->article_file = $file_name;
        $project->save();
        if($project->id){
            return redirect()->back()->with('success',1);
        }
        else{
            return redirect()->back()->with('unsuccessful',1);
        }
    }

    public function delete_articles(Request $request){
        $request->validate([
            'id' => 'required|numeric'
        ]);
        $article = Articles::find($request->id);
        unlink('img/articles/'.$article->article_photo);
        unlink('books/'.$article->article_file);
        Articles::where('id',$request->id)->delete();
        return redirect()->back()->with('delete',1);
    }

    public function pr_trainings(){
        $pr_training = PracticalTrainings::get();
        return view('admin.pr_trainings', ['pr_training' => $pr_training]);
    }

    public function add_pr_trainings(Request $request){
        $request->validate([
            'image' => 'required|image|max:2048',
            'name' => 'required|string',
            'file' => 'required|file'
        ]);
        $org_name = $request->file('image')->getClientOriginalName();
        $microTime = md5(microtime());
        $photo_name = $microTime.$org_name;
        $request->file('image')->move('img/practical_trainings/',$photo_name);

        $file_org_name = $request->file('file')->getClientOriginalName();
        $microTime = md5(microtime());
        $file_name = $microTime.$file_org_name;
        $request->file('file')->move('books/',$file_name);



        $pr_train = new PracticalTrainings();
        $pr_train->practical_name = $request->name;
        $pr_train->practical_photo = $photo_name;
        $pr_train->practical_file = $file_name;
        $pr_train->save();
        if($pr_train->id){
            return redirect()->back()->with('success',1);
        }
        else{
            return redirect()->back()->with('unsuccessful',1);
        }
    }

    public function delete_pr_trainings(Request $request){
        $request->validate([
            'id' => 'required|numeric'
        ]);
        $pr_tr = PracticalTrainings::find($request->id);
        unlink('img/practical_trainings/'.$pr_tr->practical_photo);
        unlink('books/'.$pr_tr->practical_file);
        PracticalTrainings::where('id',$request->id)->delete();
        return redirect()->back()->with('delete',1);
    }

}
