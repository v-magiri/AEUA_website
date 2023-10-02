<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ConcernController;
use App\Http\Controllers\EntreprenuershipController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvolvementController;

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

//  EVENT ROUTES 
Route::get('admin/events', 
    [EventController::class,"index"])
    ->middleware(['auth', 'verified'])
    ->name('events');

Route::get('admin/event/edit/{id}', 
    [EventController::class,"edit"])
    ->middleware(['auth', 'verified'])
    ->name('event.edit');

Route::get('admin/event/{id}', 
    [EventController::class,"show"])
    ->middleware(['auth', 'verified'])
    ->name('event.show');

Route::put('admin/event/edit/{id}', 
    [EventController::class,"update"])
    ->middleware(['auth', 'verified'])
    ->name('event.update');

Route::post('admin/events',
    [EventController::class,"store"])
    ->middleware(['auth', 'verified'])
    ->name('event.store');

Route::delete('admin/event/delete/{id}',
    [EventController::class,"destroy"]
    )->middleware(['auth', 'verified'])
    ->name('event.destroy');

// MEMBER ROUTES 
Route::get('admin/members', 
    [MemberController::class,"index"])
    ->middleware(['auth', 'verified'])
    ->name('members');

Route::get('admin/member/{id}', 
    [MemberController::class,"show"])
    ->middleware(['auth', 'verified'])
    ->name('member.show');

Route::get('admin/member/edit/{id}', 
    [MemberController::class,"edit"])
    ->middleware(['auth', 'verified'])
    ->name('member.edit');

Route::post('admin/member',
        [MemberController::class,"store"]
        )->middleware(['auth', 'verified'])
        ->name('member.store');

Route::put('admin/member/edit/{id}',
        [MemberController::class,"update"]
        )->middleware(['auth', 'verified'])
        ->name('member.update');

Route::delete('admin/member/delete/{id}',
        [MemberController::class,"destroy"]
        )->middleware(['auth', 'verified'])
        ->name('member.destroy');

// NEWSLETTER ROUTES 
Route::get('admin/newsletter', 
    [NewsletterController::class,'index'])
    ->middleware(['auth', 'verified'])
    ->name('newsletter');

Route::get('admin/newsletter/{id}', 
    [NewsletterController::class,'show'])
    ->middleware(['auth', 'verified'])
    ->name('newsletter.show');

Route::get('admin/newsletter/edit/{id}', 
    [NewsletterController::class,'edit'])
    ->middleware(['auth', 'verified'])
    ->name('newsletter.edit');

Route::post('admin/newsletter',
    [NewsletterController::class,"store"]
    )-> middleware(['auth', 'verified'])
    -> name('newsletter.store');
Route::delete('admin/newsletter/delete/{id}',
    [NewsletterController::class,"destroy"]
    )->middleware(['auth', 'verified'])
    ->name('newsletter.destroy');

// concerns
Route::get('admin/concerns', 
    [ConcernController::class,"index"])
    ->middleware(['auth', 'verified'])
    ->name('concerns');

// QUESTION OR INVOLVEMENT CHALLENGES OR IDEAS

Route::get('admin/inquiries', 
    [InvolvementController::class,"index"])
    ->middleware(['auth', 'verified'])
    ->name('inquiries');

// PUBLIC VIEW 
Route::get('/events', function () {
    return view('web.events-web');
});

Route::get('/about-us', [MemberController::class,"getMembers"]);

Route::get('/newsletters',
    [NewsletterController::class,'getNewsletters'])
    ->name('web.newsletters');

Route::get('/download/newsletter/{id}',
    [NewsletterController::class,'downloadNewsletter'])
    ->name('download.newsletter');

Route::get('/funding', function () {
    return view('web.funding-web');
});

Route::get('/', [MemberController::class,'getMembersCount']);

Route::get('contact', function () {
    return view('web.contact-web');
});

Route::get('/member-register', function () {
    return view('web.registration');
});

Route::get('/get/involved', function () {
    return view('web.involvement');
})->name('involvement');

Route::post('/involvement',[InvolvementController::class,'saveInvolvement'])->name('involvement.store');

Route::post('/register/member',[MemberController::class,"store"])->name('member.store');

Route::post('/send/message',[ConcernController::class,"store"])->name('concern.store');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
