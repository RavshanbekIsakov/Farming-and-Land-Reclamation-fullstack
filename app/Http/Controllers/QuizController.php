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
            'image' => 'image|max:2048',
            'question' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'option_correct' => 'required|in:a,b,c,d',
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

        if ($request->option_correct == 'a') {
            $correct_ans = $request->option_a;
        }
        elseif ($request->option_correct == 'b') {
            $correct_ans = $request->option_b;
        }
        elseif ($request->option_correct == 'c') {
            $correct_ans = $request->option_c;
        }
        elseif ($request->option_correct == 'd') {
            $correct_ans = $request->option_d;
        }

        $n_quiz = new Quizzes();
        $n_quiz->questions = $request->question;
        $n_quiz->question_photo = $photo_name;
        $n_quiz->option_a = $request->option_a;
        $n_quiz->option_b = $request->option_b;
        $n_quiz->option_c = $request->option_c;
        $n_quiz->option_d = $request->option_d;
        $n_quiz->option_correct = $correct_ans;
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
        if ($quiz->question_photo != "no_photo") {
            unlink('img/quizzes/'. $quiz->question_photo);
        }
        Quizzes::where('id',$request->id)->delete();
        return redirect()->back()->with('delete',1);
    }

    public function dehqonchilikQuiz()
    {
        $quizzes = Quizzes::where('question_type', '1')
            ->inRandomOrder()
            ->limit(50)
            ->get();

        return view('user.deh_quiz', ['tests' => $quizzes]);
    }

    public function melioratsiyaQuiz()
    {
        $quizzes = Quizzes::where('question_type', '2')
            ->inRandomOrder()
            ->limit(50)
            ->get();

        return view('user.mel_quiz', ['tests' => $quizzes]);
    }

    public function checkAnswer(Request $request)
    {
//        return $request;
        $correct = 0;
        $incorrect = 0;

        for ($x = 1; $x <= 101; $x++) {
            $front_name = "question$x";
            $answer_name = "answer$x";
//                return $answer_name;
//            return $front_name;
            if ($request->has($front_name)){
                $question = Quizzes::where('id', $request->$front_name)->first();
                if ($question->option_correct == $request->$answer_name){
                    $correct++;
                }
                else{
                    $incorrect++;
                }
            }
        }
        return redirect()->route('user.quiz_finished', ['correct' => $correct, 'incorrect' => $incorrect]);

    }

    public function quiz_finished(Request $request)
    {
        return view('user.quiz_finished',['correct' => $request->correct, 'incorrect' => $request->incorrect] );
    }
}
