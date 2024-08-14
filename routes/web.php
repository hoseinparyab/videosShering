<?php

use App\Jobs\Otp;
use App\Models\User;
use App\Models\Video;
use App\Models\Comment;
use App\Mail\VerfiyEmail;
use App\Jobs\ProcessVideo;
use App\Events\VideoCreated;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\DB;
use App\Notifications\VideoProcess;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VideoController;
use App\Http\Middleware\CheckVerifyEmail;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DislikeController;
use Illuminate\Routing\Controllers\Middleware;
use App\Http\Controllers\CategoryVideoController;


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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/videos/create', [VideoController::class, 'create'])->Middleware('emailVerify')->name('videos.create');
Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');
Route::get('/videos/{video}', [VideoController::class, 'show'])->name('videos.show');
Route::get('/videos/{video}/edit', [VideoController::class, 'edit'])->name('videos.edit');
Route::post('/videos/{video}', [VideoController::class, 'update'])->name('videos.update');
Route::post('/videos/{video}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/categories/{category:slug}/videos', [CategoryVideoController::class, 'index'])->name('categories.videos.index');
Route::get('{likeable_type}/{likeable_id}/like', [LikeController::class, 'store'])->name('likes.store');
Route::get('{likeable_type}/{likeable_id}/dislike', [DislikeController::class, 'store'])->name('dislikes.store');

Route::get('cache',function(){
  $value= Cache::remember('users',10,function(){
        sleep(3);
       return Video::all()->count();
    });
    dump($value);
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/email',function(){

    Mail::to('hoseinparyab1@gmail.com')->send(new VerfiyEmail());

});

