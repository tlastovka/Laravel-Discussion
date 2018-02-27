<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = DB::table('questions')->get(); //get to table questions in db to select all

        $view =  view('questions/index');//create new view object
        $view->questions= $questions;
        // dd($questions);//dump and die $questions

        return $view;
    }

    public function show($id) {
        $questions = DB::table('questions')->find($id);
        $view = view('questions/show') ;
        $view->questions = $questions;
        return $view;

    }
}
