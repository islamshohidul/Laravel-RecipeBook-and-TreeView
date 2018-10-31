@extends('layouts.layout')

@section('content')
    <div class="container ">
        <a class="btn btn-info pull-right" href="{{route('quizzes.index')}}"><span class="glyphicon glyphicon-arrow-left"></span></a>
        <div class="col-md-7   col-md-offset-2 bg-info " >
            <form class=" form-horizontal pull-right  " action="{{route('quizzes.store')}}" method="post">
                {{csrf_field()}}

                <div class="form-group col-md-7" >
                    <label for="name" class="col-sm-5">Name of Quiz</label>
                    <input type="text" id="name" name="name" class="form-control col-sm-10-4" placeholder="Enter quiz name">
                </div>
                <div class="form-group col-md-7" >
                    <label for="description" class="col-sm-5">Description</label>
                    <input type="text" id="description" name="description" class="form-control col-sm-10-4" placeholder="Enter quiz description">
                </div>
                <div class="col-md-7 col-md-offset-2">
                    <input type="submit" class="btn btn-primary">

                </div>



            </form>
        </div>
    </div>
    @endsection