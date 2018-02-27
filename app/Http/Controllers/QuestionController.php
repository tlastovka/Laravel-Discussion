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
    public function create()
    {
        $view = view('questions/create');

        return $view;
    }

    public function store(Request $request)
    {
     $this->validate ( $request, [
         'title'=>'required',
        'text'=>'required',
     ]);

    //  Question::create(request(['title','text']));

     $question = new \App\Question();
     $question->user_id=0;
     $question->title=$request->get('title');
     $question->text=$request->get('text');
     $question->save();


     return redirect('/questions/' . $question->id);

    }

    public function show($id) {
        $questions = DB::table('questions')->find($id);
        $questions = DB::table('questions')->where('id',$id)->first();
        $questions = DB::table('questions')->where('id','=',$id)->first();
        $question = \App\Question:: find($id);

        $view = view('questions/show') ;
        $view->question = $question;
        return $view;

    }


}
