@extends('layouts.layout')

@section('content')


    <h3 class="text text-primary  ">
        {{--{{$quiz->name}}--}}
        <div class="text-right">Number of Questions: {{count($questions)}}</div>

    </h3>

    <div class="container ">
        {{--{{dd($option)}}--}}
        @php $serial=0 @endphp
        {{--<form action="{{url('quizzes/'.$quizId.'/answer')}}" method="post">--}}
            {{--{{csrf_field()}}--}}
            <div class="form-group">
                @foreach($questions as $question)


                    <legend>{{$serial = $serial+1}}. {{$question->question}}


                        {{--@foreach($option as $option)--}}

                            @if($question->is_correct)
                            <span class="correct">Correct</span>
                            @else
                            <span class="wrong">Wrong</span>
                            @endif
                        <ul class="radio">

                            @foreach($question->options as $option)
                                <li style="list-style: none" ><input   type="radio" name="{{$question->id}}" id="crust1" value="{{$option->id}}" {{ ($option->is_correct  ) ?  'checked="checked"' : '' }}   ><label   for="crust1" class="{{($option['is_correct']==1)?'correct':''}}"   > {{$option->option}}

                                    </label>
                                    </input>
                                </li>
                            @endforeach


                        </ul>

                    </legend>
                    {{--<ul class="radio">--}}
                        {{--@foreach($question->options as $option)--}}
                            {{--<li><input type="radio" name="{{$question->id}}" id="crust1" value="{{$option->id}}" /><label for="crust1">--}}
                                    {{--@if($option[$questions[$key]->is_correct=true])--}}
                                        {{--{{"Correct"}}--}}
                                     {{--@else--}}
                                        {{--{{'Wrong'}}--}}

                                    {{--@endif </label></li>--}}
                        {{--@endforeach--}}


                    {{--</ul>--}}

                @endforeach

            </div>
            {{--<button class="btn btn-primary" type="submit" name="submit">Submit </button>--}}


        </form>


    </div>

@endsection
