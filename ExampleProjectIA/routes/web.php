<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;
use App\Models\Categories;
use Illuminate\Http\Request;

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

# We want to update something
Route::put('/login', function () {
    return "Example login page";
});

# we want to delete something from the database
Route::delete('/login', function () {
    return "Example login page";
});

// Route::get('/{id}', function (string $id) {
//     return $id;
// });


Route::get('/', function () {
    return view('welcome');
});




