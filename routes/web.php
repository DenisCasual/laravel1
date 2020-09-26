<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, NewsController};
use App\Http\Controllers\Admin\IndexController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contacts', [\App\Http\Controllers\ContactsController::class, 'contacts'])->name('contacts');

Route::name('admin.')
    ->prefix('admin')
    ->group(
        function() {
            Route::get('/', [IndexController::class, 'index'])->name('index');
            Route::get('/test1', [IndexController::class, 'test1'])->name('test1');
            Route::get('/test2', [IndexController::class, 'test2'])->name('test2');
        }
    );




Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/newsOne/{id}', [NewsController::class, 'show'])->name('newsOne');


Route::get('/news/sport', [\App\Http\Controllers\Categoryes\SportController::class, 'sport'])->name('sport');
Route::get('/news/culture', [\App\Http\Controllers\Categoryes\CultureController::class, 'culture'])->name('culture');
Route::get('/news/politics', [\App\Http\Controllers\Categoryes\PoliticsController::class, 'politics'])->name('politics');
