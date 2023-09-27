<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ConcernController;
use App\Http\Controllers\EntreprenuershipController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard',
    [DashboardController::class,'index'])
    ->middleware(['auth', 'verified']
    )->name('dashboard');


Route::get('/events', 
    [EventController::class,"index"])
    ->middleware(['auth', 'verified'])
    ->name('events');

Route::post('/events',
    [EventController::class,"store"])
    ->middleware(['auth', 'verified'])
    ->name('event.store');

Route::get('/members', 
    [MemberController::class,"index"])
    ->middleware(['auth', 'verified'])
    ->name('members');

Route::post('/member',
        [MemberController::class,"store"]
        )->middleware(['auth', 'verified'])
        ->name('member.store');

Route::get('/newsletter', 
    [NewsletterController::class,'index'])
    ->middleware(['auth', 'verified'])
    ->name('newsletter');

Route::post('/newsletter',
    [NewsletterController::class,"store"]
    )-> middleware(['auth', 'verified'])
    -> name('newsletter.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
