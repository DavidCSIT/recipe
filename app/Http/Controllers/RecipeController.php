<?php

namespace App\Http\Controllers;

use App\Models\recipe;
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
        $recipes = recipe::all();
        return view('recipes.index', ['recipes'=>$recipes]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      // dd($request);
      $validatedAttributes =  request()->validate([
         'name'=> 'required',
         // 'image'=> 'required',
         'serves'=> 'required',
         'rating'=> 'required',
         'prepTime'=> 'required',
         'ingredients'=> 'required',
         'steps'=> 'required'
       ]);



      Recipe::create($validatedAttributes);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(recipe $recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(recipe $recipe)
    {
        //
    }
}
