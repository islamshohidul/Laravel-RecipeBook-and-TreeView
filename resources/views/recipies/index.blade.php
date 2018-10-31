<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="container">
    <h1 class="h1 text-primary text-center"> Recipes and Ingredients Table </h1>
    <a class="text text-right text-primary" href="{{route('recipes.create')}}">+Create</a>
    <table class="table">
        <thead>
        <tr>
            <th>Recipe Name </th>
            <th>Ingredient Name</th>
            <th>Recipe Author</th>
            <th>Recipe Description</th>
            <th>Recipe Instruction</th>
            <th>Action</th>

        </tr>

        </thead>

        <tbody>

        @foreach($recipes as $recipe)
        <tr>
            <td class="text">{{$recipe->name}}</td>




            <td>
                @foreach ($recipe->ingredients as $ingredient)
                    <li>{{ $ingredient->name }} </li>
                @endforeach

            </td>
            <td>{{$recipe->author}}</td>
            <td>{{$recipe->description}}</td>
            <td>{{$recipe->instruction}}</td>
            <td>
                <a>Show</a>
               <a>Edit</a>
                <a>Delete</a>



            </td>
        </tr>
@endforeach
        </tbody>

    </table>



</div>
