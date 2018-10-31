@extends('layouts.layout')

@section('content')
    <div class="container " xmlns="http://www.w3.org/1999/html">

            <a href="{{route('quizzes.create')}}"><span class=" pull-right btn btn-primary glyphicon glyphicon-plus"></span> </a>

            <div >
                <table class="table table-striped table-bordered table-responsive ">
                    <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Description</th>
                        <th colspan="3" class="text-center">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($quizzes as $quiz)
                    <tr>
                        <td>
                            {{$quiz->name}}
                        </td>
                        <td>
                            {{$quiz->description}}

                        </td>
                        <td>
                            <a href="{{route('quizzes.create', $quiz['id'])}}"><span class=" pull-right btn btn-info glyphicon glyphicon-pencil"></span> </a>
                            </td>
                        <td>

                            <form action="{{route('quizzes.destroy', $quiz['id'])}}" method="post">
                                {{ csrf_field() }}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger " onclick="return confirm('Are you sure?')" type="submit"><span class=" pull-right  btn-danger glyphicon glyphicon-trash"></span></button>
                                </form>
                            </td>
                        <td>
                            <a href="{{url('quizzes/'.$quiz->id.'/question')}}"><span class=" pull-right btn btn-primary glyphicon glyphicon-eye-open"></span> </a>

                        </td>
                    </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>

    @endsection