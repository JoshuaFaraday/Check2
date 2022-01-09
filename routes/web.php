<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('stranky.najhry');
//});

Auth::routes();
Route::get('/', [App\Http\Controllers\NajhryController::class, 'index'])->name('najhry');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/najHry', [App\Http\Controllers\NajhryController::class, 'index'])->name('najhry');
Route::get('/kontakt', [App\Http\Controllers\Kontakt::class, 'index'])->name('kontakt');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/stena', [App\Http\Controllers\PostController::class, 'wall'])->name('wall');


Route::group(['middleware' => ['auth']], function () {

    Route::resource('user', UserController::class);

    Route::get('user/{user}/delete', [UserController::class, 'destroy'])->name('user.delete');

    Route::get('/upload', [App\Http\Controllers\PostController::class, 'index'])->name('upload');
    Route::post('/upload', [App\Http\Controllers\PostController::class, 'store'])->name('uploadPost');

    Route::get('/addcomment/{post}', [App\Http\Controllers\CommentController::class, 'index']);
    Route::post('/addcomment/{post}', [App\Http\Controllers\CommentController::class, 'store'])->name('addComment');

    Route::post('/like', [App\Http\Controllers\PostController::class, 'postLike'])->name('like');
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin/games', [App\Http\Controllers\GameController::class, 'adminIndex'])->name('admin.games');

    Route::get('/admin/games/{game}/edit', [App\Http\Controllers\GameController::class, 'edit'])->name('admin.games.edit');
    Route::patch('/admin/games/{game}/update', [App\Http\Controllers\GameController::class, 'update'])->name('admin.games.update');
    Route::delete('/admin/games/{game}/delete', [App\Http\Controllers\GameController::class, 'destroy'])->name('admin.games.destroy');

    Route::get('/admin/games/create', [App\Http\Controllers\GameController::class, 'create'])->name('admin.games.create');
    Route::post('/admin/games/store', [App\Http\Controllers\GameController::class, 'store'])->name('admin.games.store');




});

