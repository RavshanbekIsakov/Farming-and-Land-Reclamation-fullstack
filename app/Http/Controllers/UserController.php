<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Lectures;
use App\Models\PracticalTrainings;
use App\Models\Presentations;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function contacts()
    {
        return view('user.contacts');
    }

    public function references()
    {
        return view('user.references');
    }

    public function lab_mash()
    {
        $user_lab_books = Articles::paginate(4);
        return view('user.labaratoriya_mashgulotlari', ['articles' => $user_lab_books]);
    }

    public function amaliy_mash()
    {
        $user_amaliy_mash = PracticalTrainings::paginate(4);
        return view('user.amaliy_mashgulotlari', ['amal_mash' => $user_amaliy_mash]);
    }

    public function maruza()
    {
        return view('user.maruza');
    }

    public function deh_maruza()
    {
        $user_deh_maruza = Lectures::where('lecture_type', 1)->get();
        return view('user.deh_maruza', ['deh_maruza' => $user_deh_maruza]);
    }

    public function mel_maruza()
    {
        $user_mel_maruza = Lectures::where('lecture_type', 2)->get();
        return view('user.mel_maruza', ['mel_maruza' => $user_mel_maruza]);
    }

    public function presentatsiya()
    {
        $user_presentation = Presentations::paginate(4);
        return view('user.prezentatsiyalar', ['presentation' => $user_presentation]);
    }

}
