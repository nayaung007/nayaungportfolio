<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\SkillController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\StudentController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// UI-panel
Route::get('/',[App\Http\Controllers\UiController::class, 'index']);
Route::get('/posts',[App\Http\Controllers\UiController::class, 'postIndex']);
Route::get('/posts/{id}/details',[\App\Http\Controllers\UiController::class, 'postDetailIndex']);
Route::get('/search_posts',[\App\Http\Controllers\UiController::class, 'search']);
Route::get('/category_data/{catId}',[\App\Http\Controllers\UiController::class, 'categoryData']);

// Like and Dislike
Route::post('/post/like/{postId}',[App\Http\Controllers\LikeDislikeController::class, 'like']);
Route::post('/post/dislike/{postId}',[\App\Http\Controllers\LikeDislikeController::class, 'dislike']);

//Comments
Route::post('/post/comment/{postId}',[App\Http\Controllers\CommentController::class, 'comment']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin','middleware'=>['auth','isAdmin']],function(){
    // Admin-Panel
    Route::get('/dashboard',[\App\Http\Controllers\admin\AdminDashboardController::class, 'index']);
    // User
    Route::get('users',[\App\Http\Controllers\admin\UserController::class, 'index']);
    Route::get('users/{id}/edit',[\App\Http\Controllers\admin\UserController::class, 'edit']);
    Route::post('users/{id}/update',[\App\Http\Controllers\admin\UserController::class, 'update']);
    Route::post('users/{id}/delete',[\App\Http\Controllers\admin\UserController::class, 'delete']);

    // Skill
      Route::resource('skills',SkillController::class);

      // Project
      Route::resource('projects',ProjectController::class);

      // Student
      Route::resource('students',StudentController::class);

      //Category
      Route::resource('categories',CategoryController::class);

      //Post
      Route::resource('posts',PostController::class);
      Route::post('comment/{commentId}/show_hide',[\App\Http\Controllers\admin\PostController::class,'showHideComment']);


});