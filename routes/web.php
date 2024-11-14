<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\EducationController;
use App\Http\Controllers\admin\ExperienceController;
use App\Http\Controllers\admin\SkillsController;
use App\Http\Controllers\admin\UsersxController;
use App\Http\Controllers\Auth\RaboutController;
use App\Http\Controllers\Auth\RcontactController;
use App\Http\Controllers\Auth\ReducationController;
use App\Http\Controllers\Auth\RexperienceController;
use App\Http\Controllers\Auth\RskillsController;
use App\Http\Controllers\ResumeContoller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ResumeContoller::class, 'index'])->middleware(middleware: 'auth')->name('web');
Route::get('/web', [ResumeContoller::class, 'index'])->middleware(middleware: 'auth');

// Middleware'i doğrudan buraya uygulayın
Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::resource('/about', AboutController::class);
    Route::resource('/experience', controller: ExperienceController::class);
    Route::resource('/education', EducationController::class);
    Route::resource('/skills', SkillsController::class);
    Route::resource('/contact', ContactController::class);
    Route::resource('/usersx', controller: UsersxController::class);
});

Auth::routes();

Route::get('/rabout', [App\Http\Controllers\Auth\RaboutController::class, 'index'])->name('rabout');
Route::post('/rabout', [RaboutController::class, 'store'])->name('rabout.store');

Route::get('/reducation', [App\Http\Controllers\Auth\ReducationController::class, 'index'])->name('reducation');
Route::post('/reducation', [ReducationController::class, 'store'])->name('reducation.store');

Route::get('/rexperience', [App\Http\Controllers\Auth\RexperienceController::class, 'index'])->name('rexperience');
Route::post('/rexperience', [RexperienceController::class, 'store'])->name('rexperience.store');

Route::get('/rskills', [App\Http\Controllers\Auth\RskillsController::class, 'index'])->name('rskills');
Route::post('/rskills', [RskillsController::class, 'store'])->name('rskills.store');


Route::get('/rcontact', [App\Http\Controllers\Auth\RcontactController::class, 'index'])->name('rcontact');
Route::post('/rcontact', [RcontactController::class, 'store'])->name('rcontact.store');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
