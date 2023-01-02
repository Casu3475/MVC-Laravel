<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\CityController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;






// Route::get('/user_update',function(){
//     return view('user_update');
// })->middleware('auth')->name('user_update');

Route::get('/user_update', [UserAccountController::class, 'update'])
->middleware('auth')->name('user_update');

Route::post('/user_delete', [UserAccountController::class, 'destroy'])
->middleware('auth')->name('user_delete');

Route::get('/contact_us',function(){
    return view('contact_us');
})->name('contact_us');

Route::get('forgot_password', [PasswordResetLinkController::class, 'create'])
 ->name('password.request');
Route::post('forgot_password', [PasswordResetLinkController::class, 'store'])
 ->name('password.email'); 

Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
 ->name('password.reset');

 Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
 ->name('password.reset');

Route::post('reset-password', [NewPasswordController::class, 'store'])
 ->name('password.update');

Route::get('/', [IndexController::class,'index']);
Route::get('index',[PostController::class,'index'])->name('home');

Route::view('about','about')->name('about');
Route::view('/register','auth.register')->name('register');

Route::view('/login','auth.login')->name('login');
Route::post('/login',[AuthenticatedSessionController::class,'store']);
Route::post('/logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');


Route::view('/zip','zip')->middleware('auth')->name('zip');
Route::post('zip',[CityController::class,'__invoke'])->middleware('auth')->name('location');

Route::get('create_post',[CityController::class, 'show'])->middleware('auth')->name('create_post');
Route::post('create_post', [PostController::class, 'create'])->middleware('auth');

Route::get('/{ad}',[PostController::class,'show']);


Route::view('contact','contact')->name('contact');
Route::post('contact',[ContactController::class,'store'])->name('contact');

Route::post('/register',[RegisteredUserController::class,'store']);


Route::middleware('auth')->group(function () 
{
  
    Route::post('/user_account',[UserAccountController::class,'show'])->name('user_account');
  
    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['signed', 'throttle:6,1'])
    ->name('verification.verify');


    Route::post('dashboard',[UserPostController::class,"index"])->name('dashboard');
    Route::post('dashboard_update_ad',[UserPostController::class,"show"])->name('dashboard_update_ad');
    Route::put('dashboard_update_ad/{id}',[PostController::class,"update"])->name('ad_updated');
  
    Route::post('/dashboard/{id}',[PostController::class,'destroy'])->name('delete_ad');
  

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware('throttle:6,1')
    ->name('verification.send');

    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
    ->name('verification.notice');

    Route::post('/logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');

    
   
 

});


// Route pour filtrer les posts depuis le moteur de recherche
// Route::get('index/{keywords}', [PostController::class,'search'])->name('search_post');
Route::put('index', [PostController::class,'search'])->name('search_post');

// Route pour filtrer les posts depuis la barre de filtres
Route::post('index', [PostController::class,'filtre'])->name('filter_post');

Route::post('contact',[ContactController::class,'show'])->name('contact');
Route::post('send_email',[ContactController::class,'send_email'])->name('send_email');



