<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\EventController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    
    Route::get('/ma-page-inertia', function () {
    return Inertia::render('MyComponent'); // Le nom correspond au composant Vue.js
})->name('mycomponent');

// Route::get('/CreerEvent', function () {
//     return Inertia::render('CreerEvent'); // Le nom correspond au composant Vue.js
// })->name('CreerEvent');

Route::get('events/create', [EventController::class,'create']);
Route::post('events',[EventController::class,'store']);

});

// Route::get('customers',[EventController::class,'index'])->name('customers.index');




