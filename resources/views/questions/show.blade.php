@extends('questions/layout')

@section('content')

<section id="banner" class="banner-sm">
    <div class="container">
        <h1>Questions</h1>
    </div>
</section>

<section id="question">
    <div class="container">
        <div class="question-left">
            <div class="user-avatar">
                <img class="img-fluid"
                     src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png"/>
            </div>
            <div class="user-name">John Doe</div>
            <div class="user-stats">
                <div class="user-stat">
                    <span>3</span>
                    <label>responses</label>
                </div>
                <div class="user-stat">
                    <span>5</span>
                    <label>votes</label>
                </div>
            </div>

        </div>
        <div class="question-right">
            <h2>{{$question->title}}</h2>
            <p>{{$question->text}}</p>

        </div>
    </div>
</section>

<section id="answers">

    <div class="container">

        <h2>{{ count($question->answers)}} Answers</h2>

        @foreach($question->answers as $answer)
        <div class="answer">
            <div class="answer-left">
                <div class="user-avatar">
                    <img class="img-fluid"
                         src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png"/>
                </div>
                <div class="user-name">John Doe</div>
                <div class="user-stats">
                    <div class="user-stat">
                        <span>3</span>
                        <label>responses</label>
                    </div>
                    <div class="user-stat">
                        <span>5</span>
                        <label>votes</label>
                    </div>
                </div>
            </div>
            <div class="answer-right">
                <p>{{$answer->text}}</p>
            </div>

        </div>
        @endforeach

        <hr>

        <div class="card-block">
            <h3>Answer this question</h3>
            @if(count($errors))
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

        </div>

        {!! Form:: open(['action'=>'AnswerController@store'])!!}
        {{Form::hidden('question_id', $question->id)}}
        <div class="form-row">
            <label>Text:
                {!!Form::text('text')!!}
            </label>
        </div>


        <div class="form-row">
            <label>
                {!!Form::submit('place an answer')!!}
            </label>

        </div>

        {!!Form::close()!!}


    </div>

</section>

@endsection