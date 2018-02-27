@extends('questions.layout') @section('content')
<section id="banner">
    <div class="container">


        <h1>Create a question form</h1>
    </div>
    </section>


    <section id="questions">
        <div class="container">

        {!! Form:: open(['action'=>'QuestionController@store'])!!}

        <div class="form-row">
        <label>Title:
        {!!Form::text('title')!!}
        </label>
        </div>

        <div class="form-row">
        <label>Your question:
        {!!Form::text('text')!!}
        </label>

        </div>

        <div class="form-row">
        <label>
        {!!Form::submit('place a question')!!}
        </label>

        </div>

        {!!Form::close()!!}


    @endsection