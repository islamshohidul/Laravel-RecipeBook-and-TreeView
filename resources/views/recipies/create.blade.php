<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<div class="container">
    <a class="btn btn-info pull-right" href="{{route('recipes.index')}}">Back</a>





    <form method="post" action="{{route('recipes.store')}}" >
        {{ csrf_field() }}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="form-group">
            <label for="name">Recipe Name</label>
            <input class="form-control" type="text" name="name" id="name">

        </div>

        <div class="form-group">
            <label for="author">Recipe Author</label>
            <input class="form-control" type="text" name="author" id="author">

        </div>

        <div class="form-group">
            <label for="description">Recipe Description</label>
            <input class="form-control" type="text" name="description" id="description">

        </div>
        <div class="form-group">
            <label for="instruction">Recipe Instruction</label>
            <input class="form-control" type="text" name="instruction" id="instruction">

        </div>

        <di>
            @foreach($ingredients as $key=>$ingredient)
                <input type="checkbox" name="ingredients[]" value="{{$key}}"> <label>{{$ingredient}}</label>

            @endforeach


        </di>

        <button type="submit" class="btn btn-primary">Submit </button>
    </form>

</div>