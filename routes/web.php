<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\CommentController;
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
Route::resource('publications', PublicationController::class);

Route::get('/show-flash-variable', [App\Http\Controllers\BookController::class, 'getDownload']);

Route::resource('books', BookController::class);

Route::resource('comments', CommentController::class);

Route::get('/blog', [App\Http\Controllers\WorldCountriesAndStatesController::class, 'publicationsShowcase']);

Route::get('/blogs/{categories}', [App\Http\Controllers\WorldCountriesAndStatesController::class, 'publicationsShowcaseCategory']);

Route::get('/test', function () {
    return view('test');
});

Route::get('/blog/{slug}', [App\Http\Controllers\WorldCountriesAndStatesController::class, 'publicationsBySlug']);

Route::get('/Blog/{id}', [App\Http\Controllers\WorldCountriesAndStatesController::class, 'publications']);

Route::get('/', [App\Http\Controllers\WorldCountriesAndStatesController::class, 'home']);

Route::get('/1', [App\Http\Controllers\WorldCountriesAndStatesController::class, 'getstates']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
