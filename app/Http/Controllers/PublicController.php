<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PublicController;

class PublicController extends Controller
{
    public function homepage(){
        $articles = Article::orderBy('created_at', 'desc')->take(4)->get();
        return view('welcome' ,compact('articles'));
    }



}
