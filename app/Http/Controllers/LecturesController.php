<?php

namespace App\Http\Controllers;

use App\Models\Lectures;
use Illuminate\Http\Request;

class LecturesController extends Controller
{
    public function lectures(){
        $lectures = Lectures::get();
        return view('admin.lectures', ['lectures' => $lectures]);
    }

    public function add_lectures(Request $request){
        $request->validate([
            'image' => 'required|image|max:2048',
            'name' => 'required|string',
            'file' => 'required|file',
            'type' => 'required|string'
        ]);
        $org_name = $request->file('image')->getClientOriginalName();
        $microTime = md5(microtime());
        $photo_name = $microTime.$org_name;
        $request->file('image')->move('img/lectures/',$photo_name);

        $file_org_name = $request->file('file')->getClientOriginalName();
        $microTime = md5(microtime());
        $file_name = $microTime.$file_org_name;
        $request->file('file')->move('books/',$file_name);



        $n_lecture = new Lectures();
        $n_lecture->lecture_name = $request->name;
        $n_lecture->lecture_photo = $photo_name;
        $n_lecture->lecture_file = $file_name;
        $n_lecture->lecture_type = $request->type;
        $n_lecture->save();
        if($n_lecture->id){
            return redirect()->back()->with('success',1);
        }
        else{
            return redirect()->back()->with('unsuccessful',1);
        }
    }

    public function delete_lecture(Request $request){
        $request->validate([
            'id' => 'required|numeric'
        ]);
        $lecture = Lectures::find($request->id);
        unlink('img/lectures/'.$lecture->lecture_photo);
        unlink('books/'.$lecture->lecture_file);
        Lectures::where('id',$request->id)->delete();
        return redirect()->back()->with('delete',1);
    }
}
