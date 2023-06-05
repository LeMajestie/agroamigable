<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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
Route::resource('books', BookController::class)->withoutMiddleware(['web']);

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
