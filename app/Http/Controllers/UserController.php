<?php

namespace App\Http\Controllers;

use App\Models\Articles;
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

}
