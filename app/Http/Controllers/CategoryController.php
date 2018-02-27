<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        $categories = DB::table('categories')->get();//select all rows from the table 'categories'

        $view = view('categories/index'); //prepare the view

        $view->categories = $categories; //insert the selected categories into the view

        return $view; //return the view
    }


}
