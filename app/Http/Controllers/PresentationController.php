<?php

namespace App\Http\Controllers;

use App\Models\Presentations;
use Illuminate\Http\Request;

class PresentationController extends Controller
{
    public function presentations(){
        $presentations = Presentations::get();
        return view('admin.presentations', ['presentations' => $presentations]);
    }

    public function add_pres(Request $request){
        $request->validate([
            'image' => 'required|image|max:2048',
            'name' => 'required|string',
            'file' => 'required|file',
            'pres_type' => 'required|in:1,2'
        ]);
        $photo_org_name = $request->file('image')->getClientOriginalName();
        $microTime = md5(microtime());
        $photo_name = $microTime.$photo_org_name;
        $request->file('image')->move('img/presentations/',$photo_name);

        $file_org_name = $request->file('file')->getClientOriginalName();
        $microTime = md5(microtime());
        $file_name = $microTime.$file_org_name;
        $request->file('file')->move('pre_files/',$file_name);



        $n_pres = new Presentations();
        $n_pres->pres_name = $request->name;
        $n_pres->pres_photo = $photo_name;
        $n_pres->pres_file = $file_name;
        $n_pres->pres_type = $request->pres_type;
        $n_pres->save();
        if($n_pres->id){
            return redirect()->back()->with('success',1);
        }
        else{
            return redirect()->back()->with('unsuccessful',1);
        }
    }

    public function delete_pres(Request $request){
        $request->validate([
            'id' => 'required|numeric'
        ]);
        $presentations = Presentations::find($request->id);
        unlink('img/presentations/'.$presentations->pres_photo);
        unlink('pre_files/'.$presentations->pres_file);
        Presentations::where('id',$request->id)->delete();
        return redirect()->back()->with('delete',1);
    }
}
