<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\MoodController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ProfileController;




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

Route::get('/', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// Route::get('/livechatforum', function () {
//     return view ('LiveChatForum', [
//         "title" => "LiveChat Forum",
//         "active" => 'livechatforum'
//     ]);
// });

// Route::get('/moodtracker', function () {
//     return view ('MoodTracker', [
//         "title" => "MoodTracker",
//         "active" => 'moodtracker'
//     ]);
// });



// Route::get('/caripsikiater', function () {
//     return view ('caripsikiater', [
//         "title" => "Cari Psikiater",
//         "active" => 'caripsikiater'
//     ]);
// });


//halaman single post

Route::get('home/{post:slug}', [PostController::class, 'show']);

Route::get('article', [PostController::class, 'article'])->name('article')->middleware('admin');
Route::get('article/create', [PostController::class, 'create'])->name('article.create')->middleware('admin');
Route::post('article/edit', [PostController::class, 'edit'])->name('article.edit')->middleware('admin');
Route::delete('/data/{id}', [PostController::class, 'delete'])->name('deleteArc')->middleware('admin');
Route::post('/article/editpost', [PostController::class, 'editpost'])->name('article.editpost')->middleware('admin');
Route::post('/article/createpost', [PostController::class, 'createpost'])->name('article.createpost')->middleware('admin');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', 
[RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');

})->middleware('auth');

Route::get('/forum', [TopicController::class, 'index'])->name('topics.index')->middleware('loginonly');
Route::get('/forum/topics/create', [TopicController::class, 'create'])->name('topics.create')->middleware('loginonly');
Route::post('/forum/topics', [TopicController::class, 'store'])->name('topics.store')->middleware('loginonly');
// Route::get('/forum/topics/{topic}', [TopicController::class, 'show'])->name('topics.show');
Route::post('/forum/topic/detail', [TopicController::class, 'show'])->name('topics.show')->middleware('loginonly');
Route::post('/forum/topics/{topic}/replies', [ReplyController::class, 'store'])->name('replies.store')->middleware('loginonly');

Route::get('/getReplies', [ReplyController::class, 'getReplies'])->name('getReplies')->middleware('loginonly');


Route::get('/moods', [MoodController::class, 'index'])->name('moods.index')->middleware('loginonly');
Route::get('/moods/create', [MoodController::class, 'create'])->name('moods.create')->middleware('loginonly');
Route::get('/moods/activity', [MoodController::class, 'activity'])->name('moods.activity')->middleware('loginonly');
Route::get('/moods/result', [MoodController::class, 'result'])->name('moods.result')->middleware('loginonly');
Route::get('/moods/history', [MoodController::class, 'history'])->name('moods.history')->middleware('loginonly');
Route::post('/moods', [MoodController::class, 'store'])->name('moods.store')->middleware('loginonly');
Route::post('/moodstodo', [MoodController::class, 'storetodo'])->name('moods.storetodo')->middleware('loginonly');




Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/posts', AdminPostController::class)->except('show')->middleware('admin');
Route::get('/psychiatrists', [PsychiatristController::class, 'index'])->name('psychiatrists.index');
Route::get('/psychiatrists/{psychiatrist}', [PsychiatristController::class, 'show'])->name('psychiatrists.show');



Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
Route::get('dashboard/doctors/create', [DoctorController::class, 'create'])->name('doctors.create');
Route::post('/doctors', [DoctorController::class, 'store'])->name('doctors.store');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('loginonly');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth')->middleware('loginonly');
Route::get('/places/find-nearest-psychiatrists', 'App\Http\Controllers\PlacesController@findNearestPsychiatrists')->middleware('loginonly');