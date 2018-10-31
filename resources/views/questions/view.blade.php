@extends('layouts.layout')

@section('content')
    <h3 class="text text-primary  ">
            {{$quiz->name}}
       <div class="text-right">Number of Questions: {{count($questions)}}</div>

    </h3>

    <div class="container ">
       @php $serial=0 @endphp
        <form action="{{url('quizzes/'.$quizId.'/answer')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
            @foreach($questions as $question)


                <legend>{{$serial = $serial+1}}. {{$question->question}} </legend>
                <ul class="radio">

                    @foreach($question->options as $option)
                        <li><input type="radio" name="{{$question->id}}" id="crust1" value="{{$option->id}}"  /><label for="crust1">      {{$option->option}}
                            </label></li>
                    @endforeach


                </ul>

            @endforeach

            </div>
            <button class="btn btn-primary" type="submit" name="submit">Submit </button>


        </form>


    </div>

    @endsection
