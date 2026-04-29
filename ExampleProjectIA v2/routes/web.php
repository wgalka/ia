<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;
use App\Models\Categories;
use Illuminate\Http\Request;

use function Termwind\render;

# Obtain something form database
Route::get('/example-get', function () {
    # Get all categories form database
    $categories = Categories::all();
    # TODO
                                # PASS ARRAY WITH CATEGORIES TO THE VIEW
    return view('example-get',  ['categories' => $categories]);
})->name("example-get");

# We we want to save something inside database
Route::post('/example-post/', function (Request $request) {

    Categories::create([
        'name' => $request->name,
        'slug' => $request->slug,
        'description'=> $request->description,
    ]);
    return redirect("example-get");
});

Route::get("/example-get/{id}/edit", function(Categories $id){

    return view("example-edit-form", ['category'=>$id]);
});

# We want to update something
Route::put('/example-update/{id}', function (Request $request, $id) {
    $category = Categories::findOrFail($id); // it will find the category by id

    $category->update([
        'name' => $request->name,
        'slug' => $request->slug,
        'description'=> $request->description,
    ]);

    return redirect("example-get");
});

# we want to delete something from the database
Route::delete('/example-delete/{id}', function (Categories $id) {
    $id->deleteOrFail();  //what function is used to delete?
    return redirect("example-get");
});

// Route::get('/{id}', function (string $id) {
//     return $id;
// });


Route::get('/', function () {
    return view('welcome');
});




