<?php

use App\Events\VideoCreated;
use App\Models\Video;
use App\Mail\VerfiyEmail;
use App\Notifications\VideoProcess;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CategoryVideoController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\DislikeController;
use App\Http\Middleware\CheckVerifyEmail;
use App\Jobs\Otp;
use App\Jobs\ProcessVideo;
use App\Models\Comment;
use App\Notifications\InvoicePaid;
use App\Models\User;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;


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
Route::get('query',function(){

    $videos = DB::table('videos')->get();
    dd($videos);
    foreach ($videos as $video) {
        dump(get_class($video));

    }
    dd($video);
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/email',function(){

    Mail::to('hoseinparyab1@gmail.com')->send(new VerfiyEmail());

});

