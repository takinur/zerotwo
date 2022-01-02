<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DashController;
use App\Http\Livewire\ShowCandidates;
use App\Http\Livewire\ProfileController;
use App\Http\Livewire\ShowUser;
use App\Http\Controllers\Auth\RegisterStep2Controller;



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

//Default Home Page
Route::get('/', [PagesController::class, 'index'])->name('home');

//Redirect to Home Page
Route::get('/home', [PagesController::class, 'index']);

//Find Talent
Route::get('/find-talent', [PagesController::class, 'findTalent'])->name('findtalent');

//Find Work
Route::get('/find-work', [PagesController::class, 'findWork'])->name('findwork');

//About
Route::get('/about', [PagesController::class, 'about'])->name('about');

//Pricing
Route::get('/pricing', [PagesController::class, 'pricing'])->name('pricing');

//Contact
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

//Contact
Route::get('/privacy', [PagesController::class, 'privacy'])->name('privacy');


//2 Step Registration
Route::get('/register-step2', [RegisterStep2Controller::class, 'showForm']);

Route::post('register-step2', [RegisterStep2Controller::class, 'postForm'])
  ->name('register.step2');

//All and Single Candidate
Route::get('/candidates', ShowCandidates::class)->name('candidates');

Route::get('/candidates/{cand}', ProfileController::class);

//For User profile
Route::group(['middleware'=> ['auth', 'role:candidate']], function(){
    Route::get('/profile', ShowUser::class);
}); 

//Dashboard Route For all User
Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', [DashController::class, 'index'])
    ->name('dashboard');
});
//Newsletter
Route::post('newsSub', [PagesController::class, 'store'])
  ->name('newsSub');
//contact Page
Route::post('contactForm', [PagesController::class, 'contactStore'])
  ->name('contactForm');

require __DIR__.'/auth.php';
