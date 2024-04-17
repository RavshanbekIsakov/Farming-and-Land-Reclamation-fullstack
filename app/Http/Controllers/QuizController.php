<?php

namespace App\Http\Controllers;

use App\Models\Quizzes;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function quizzes(){
        $quizzes = Quizzes::get();
        return view('admin.quizzes', ['quizzes' => $quizzes]);
    }

    public function add_quiz(Request $request){
        $request->validate([
            'image' => 'required|image|max:2048',
            'question' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'option_correct' => 'required|string',
            'quiz_type' => 'required|in:1,2'
        ]);
        if ($request->hasFile('image')){
            $quiz_org_name = $request->file('image')->getClientOriginalName();
            $microTime = md5(microtime());
            $photo_name = $microTime.$quiz_org_name;
            $request->file('image')->move('img/quizzes/',$photo_name);
        }
        else{
            $photo_name = "no_photo";
        }

        $n_quiz = new Quizzes();
        $n_quiz->questions = $request->question;
        $n_quiz->question_photo = $photo_name;
        $n_quiz->option_a = $request->option_a;
        $n_quiz->option_b = $request->option_b;
        $n_quiz->option_c = $request->option_c;
        $n_quiz->option_d = $request->option_d;
        $n_quiz->option_correct = $request->option_correct;
        $n_quiz->question_type = $request->quiz_type;
        $n_quiz->save();
        if($n_quiz->id){
            return redirect()->back()->with('success',1);
        }
        else{
            return redirect()->back()->with('unsuccessful',1);
        }
    }

    public function delete_quiz(Request $request){
        $request->validate([
            'id' => 'required|numeric'
        ]);
        $quiz = Quizzes::find($request->id);
        unlink('img/quizzes/'.$quiz->question_photo);
        Quizzes::where('id',$request->id)->delete();
        return redirect()->back()->with('delete',1);
    }
}
