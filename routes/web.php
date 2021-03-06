<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

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

// test, delete later
//Route::get('/', function () {
//    return view('stranky.najhry');
//});

Auth::routes();
Route::get('/', [App\Http\Controllers\GameController::class, 'index'])->name('topGames');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/topGames', [App\Http\Controllers\GameController::class, 'index'])->name('topGames');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

// test, delete later
//Route::get('/admin/tests/create', function (Request $request) {
//    ddd($request->is('admin/*'));
//    return $request->is('admin/*');
////    return view('test', ['post'=>\App\Models\Post::first()]);
//})->name('about');

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts');
Route::get('/posts/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post');

/*********************************************************************************************************************
Auth only section
 */
Route::group(['middleware' => ['auth']], function () {

    Route::get('/user/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{user}/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');

//    Route::get('/upload', [App\Http\Controllers\PostController::class, 'upload'])->name('upload');
//    Route::post('/upload', [App\Http\Controllers\PostController::class, 'store'])->name('uploadPost');

    Route::post('/addcomment', [App\Http\Controllers\CommentController::class, 'store'])->name('addComment');
    Route::delete('/comments/{comment}/delete', [App\Http\Controllers\CommentController::class, 'destroy'])->name('comment.destroy');
    Route::post('/like', [App\Http\Controllers\PostController::class, 'postLike'])->name('like');
});

/*********************************************************************************************************************
Admin section
 */
Route::group(['middleware' => ['admin']], function () {
    /*Games*/
    Route::get('/admin/games', [App\Http\Controllers\GameController::class, 'index'])->name('admin.games');

    Route::get('/admin/games/{game}/edit', [App\Http\Controllers\GameController::class, 'edit'])->name('admin.games.edit');
    Route::patch('/admin/games/{game}/update', [App\Http\Controllers\GameController::class, 'update'])->name('admin.games.update');
    Route::delete('/admin/games/{game}/delete', [App\Http\Controllers\GameController::class, 'destroy'])->name('admin.games.destroy');

    Route::get('/admin/games/create', [App\Http\Controllers\GameController::class, 'create'])->name('admin.games.create');
    Route::post('/admin/games/store', [App\Http\Controllers\GameController::class, 'store'])->name('admin.games.store');

    /*Users*/
    Route::get('/admin/users', [App\Http\Controllers\UserController::class, 'index'])->name('admin.users');

    Route::get('/admin/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('admin.users.edit');
    Route::patch('/admin/users/{user}/update', [App\Http\Controllers\UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{user}/delete', [App\Http\Controllers\UserController::class, 'destroy'])->name('admin.users.destroy');

    Route::get('/admin/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users/store', [App\Http\Controllers\UserController::class, 'store'])->name('admin.users.store');

    /*Posts*/
    Route::get('/admin/posts', [App\Http\Controllers\PostController::class, 'index'])->name('admin.posts');

    Route::get('/admin/posts/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('admin.posts.edit');
    Route::patch('/admin/posts/{post}/update', [App\Http\Controllers\PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('/admin/posts/{post}/delete', [App\Http\Controllers\PostController::class, 'destroy'])->name('admin.posts.destroy');

    Route::get('/admin/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('admin.posts.create');
    Route::post('/admin/posts/store', [App\Http\Controllers\PostController::class, 'store'])->name('admin.posts.store');
});
