@extends('layouts.layout')

<div class="col-md-6">
    <h3>Add New Category</h3>


    {{--{!! Form::open(['route'=>'add.category']) !!}--}}


    {{--@if ($message = Session::get('success'))--}}
        {{--<div class="alert alert-success alert-block">--}}
            {{--<button type="button" class="close" data-dismiss="alert">×</button>--}}
            {{--<strong>{{ $message }}</strong>--}}
        {{--</div>--}}
    {{--@endif--}}


    {{--<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">--}}
        {{--{!! Form::label('Title:') !!}--}}
        {{--{!! Form::text('title', old('title'), ['class'=>'form-control', 'placeholder'=>'Enter Title']) !!}--}}
        {{--<span class="text-danger">{{ $errors->first('title') }}</span>--}}
    {{--</div>--}}


    {{--<div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">--}}
        {{--{!! Form::label('Category:') !!}--}}
        {{--{!! Form::select('parent_id', old('parent_id'), ['class'=>'form-control', 'placeholder'=>'Select Category']) !!}--}}
        {{--<span class="text-danger">{{ $errors->first('parent_id') }}</span>--}}
    {{--</div>--}}


    {{--<div class="form-group">--}}
        {{--<button class="btn btn-success">Add New</button>--}}
    {{--</div>--}}


    {{--{!! Form::close() !!}--}}

    <form method="post" action="{{url('categories/store')}}">
        {{csrf_field()}}
        <di class="form-group">
            <select class="form-control" name="parent_category">

                <option value="">Select Item</option>

                @foreach ($allCategories as $category)
                    <option value="{{ $category->id }}" {{ ( $category->id == $category->parent_id) ? 'selected' : '' }}> {{ $category->name }} </option>
                @endforeach    </select>

        </di>
        <div class="form-group">
            <label for="name" >Name of the Category</label>
          <input type="text" class="form-control" name="name" id="name">

        </div>

        <div class="form-group">
            <label for="description" >Description of the Category</label>
            <input type="text" class="form-control" name="description" id="description">

        </div>
        <button  type="submit" class="btn btn-primary ">Submit</button>
    </form>


</div>