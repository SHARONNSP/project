<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', HomeController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login');




/** Route Grouping */
/** prefix can easily to modify the route name let say customer change to user. */
// Route::group(['prefix' => 'customer'], function(){
//     Route::get('/', function () {
//         return "<h1>Customer List</h1>";
//     });

//     Route::get('/create', function () {
//         return "<h1>Customer Create</h1>";
//     });

//     Route::get('/show', function () {
//         return "<h1>Customer Show</h1>";
//     });
// });



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


// Route::get('about', function(){
//     return "<h1>About Page</h1>";
// })->name('about');

// Route::get('contact', function(){
//     return "<h1>Contact Page</h1>";
// });

// Route::get('contact/{id}', function($id){
//     return $id;
// })->name('edit-contact');

// Route::get('home', function(){
//     return "<a href='".route('edit-contact', 1)."'>About</a>";
// });

// require __DIR__.'/auth.php';


//Route Methods

/**
 * GET - Request a resource
 * POST - Create a new resource
 * PUT - Update a resource
 * PATCH - Modify a resource
 * DELETE - Delete a resource
 */
