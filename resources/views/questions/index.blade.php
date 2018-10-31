@extends('layouts.layout')

@section('content')
    <div class="container">


        <div >
            <a href="{{url('questions/'.$quizId.'/create')}}"><span class=" pull-right btn btn-primary glyphicon glyphicon-plus"></span> </a>
            <table class="table table-striped table-bordered table-responsive ">
                <thead>
                <tr>
                    <th class="text-center">Question Name</th>
                    <th>Quiz number</th>
                    <th>Quiz name</th>
                    <th class="text-center">Question Description</th>
                    <th colspan="3" class="text-center">Action</th>
                </tr>
                </thead>

                <tbody>


                @foreach($questions as $question)
                    <tr>


                        <td>
                            {{$question->question}}
                        </td>
                        <td>{{$question->quiz_id}}</td>
                        <td>{{$question->quiz->name}}</td>

                        <td>
                            {{$question->description}}

                        </td>
                        <td>
                            <a href="{{route('questions.create', $question['id'])}}"><span class=" pull-right btn btn-info glyphicon glyphicon-pencil"></span> </a>
                        </td>
                        <td>

                            <form action="{{route('questions.destroy', $question['id'])}}" method="post">

                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger " onclick="return confirm('Are you sure?')" type="submit"><span class=" pull-right  btn-danger glyphicon glyphicon-trash"></span></button>
                            </form>
                        </td>
                        {{--<td>--}}
                        {{--<a href="{{route('quizzes.update')}}"><span class=" pull-right btn btn-primary glyphicon glyphicon-eye-open"></span> </a>--}}

                        {{--</td>--}}
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

    </div>

@endsection