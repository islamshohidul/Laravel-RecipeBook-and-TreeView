<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes= Recipe::with('ingredients')->get();
       //dd($recipes->ingredients());
        return view('recipies.index', ['recipes'=>$recipes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients = Ingredient::get()->pluck('name','id');
//foreach($ingredients as $key=>$ingredient){
//    dd($key);
//}


//dd($ingredients);
        return view('recipies.create' , ['ingredients'=>$ingredients]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
       // dd($request->all());
        $recipe = new Recipe();
        $recipe->name = $request->name;

       // $recipe->ingredient_id = $request->ingredient_id;
        $recipe->author = $request->author;
        $recipe->description = $request->description;
        $recipe->instruction = $request->instruction;
        $recipe->save();
        $recipe->ingredients()->attach($request->ingredients);

        return redirect()->route('recipes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
