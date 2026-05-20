<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        #TODO display all categories in form of list
        # after we type in the browser 127.0.0.1:800/category
        $categories = Categories::all();

        return view("posts.index", ["categories" => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // TODO create a view witch cotanins form for creating new category
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        // TODO strore new category in the database
        // After successful storage redirect user to the index page

        // VALIDATION RULES CAN BE PUT HERE BUT ITS GOOD PRACTIECE TO MOVE IT TO STORECATEGOREREQUEST.CLAss
        // So we can reuse it

        Categories::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description'=> $request->description,
        ]);

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategoryRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
