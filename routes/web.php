<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class , 'index'])->name('system.home.page.view');
Route::get('/contact', [HomeController::class , 'returnContactPage'])->name('system.contact.view');


Route::prefix('/user')->group(function (){
    Route::get('/login', [UserController::class , 'loginView'])->name('login');
    Route::get('/register', [UserController::class , 'registerView'])->name('user.register.view');
    Route::post('/login', [UserController::class , 'login'])->name('user.login.handle');
    Route::post('/register', [UserController::class , 'register'])->name('user.register.handle');
    Route::get('/logout', [UserController::class , 'logout'])->name('user.logout')->middleware('auth');
});


Route::prefix('/student')->group(function (){
    Route::get('/inscription', [StudentController::class , 'preinscriptionView'])->name('student.inscription.view');
    Route::post('/inscription', [StudentController::class , 'preinscriptionStore'])->name('student.preinscription.store');
    Route::get('/check-round/{level_id}',[StudentController::class,'checkRound'])->name('student.inscription.check.round');
    Route::post('/check-student-exists',[StudentController::class,'checkStudentForInscription'])->name('student.inscription.check.exist');
    Route::post('/formation-student-registration',[StudentController::class,'formationStudentRegistration'])->name('formation.student.registration');
    Route::get('/set-badge/{student_id}/{round_id}/{participation_id}',[StudentController::class,'setBadge']);

});

Route::middleware(['auth'])->group(function (){
    Route::prefix('system-admin')->group(function (){
        Route::get('/',[SystemController::class,'index'])->name('system.admin.start');
        Route::get('/new-year',[SystemController::class,'addYear'])->name('year.admin.new');
        Route::post('/new-round',[SystemController::class,'addRound'])->name('round.admin.new');
    });

    Route::prefix('/user')->group(function (){
        Route::get('/profile', [UserController::class , 'userProfil'])->name('user.profile.view');

    });
});


