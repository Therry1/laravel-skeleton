<?php

use App\Http\Controllers\Admin\MoneyController;
use App\Http\Controllers\Admin\permissionController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\PreInscriptionController;
use App\Http\Controllers\Admin\SystemController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class , 'index'])->name('system.home.page.view');
Route::get('/contact', [HomeController::class , 'returnContactPage'])->name('system.contact.view');

Route::prefix('/user')->group(function (){
    Route::get('/login', [UserController::class , 'loginView'])->name('login');
    Route::get('/register', [UserController::class , 'registerView'])->name('user.register.view')->middleware('auth');
    Route::post('/login', [UserController::class , 'login'])->name('user.login.handle');
    Route::post('/register', [UserController::class , 'register'])->name('user.register.handle')->middleware('auth');
    Route::get('/logout', [UserController::class , 'logout'])->name('user.logout')->middleware('auth');
});


Route::prefix('/student')->group(function (){
    Route::get('/inscription', [StudentController::class , 'preinscriptionView'])->name('student.inscription.view');
    Route::post('/inscription', [StudentController::class , 'preinscriptionStore'])->name('student.preinscription.store');
    Route::get('/check-round/{level_id}',[StudentController::class,'checkRound'])->name('student.inscription.check.round');
    Route::post('/check-student-exists',[StudentController::class,'checkStudentForInscription'])->name('student.inscription.check.exist');
    Route::post('/formation-student-registration',[StudentController::class,'formationStudentRegistration'])->name('formation.student.registration');
    Route::get('/set-badge/{student_id}/{round_id}/{participation_id}',[StudentController::class,'setBadge']);
    Route::post('/payment/check-student-exists/',[MoneyController::class,'checkStudentForPayment'])->name('payment.student.check.exist');

});

Route::middleware(['auth'])->group(function (){
    Route::prefix('system-admin')->group(function (){
        Route::get('/',[SystemController::class,'index'])->name('system.admin.start');
        Route::get('/new-year',[SystemController::class,'addYear'])->name('year.admin.new');
        Route::post('/new-round',[SystemController::class,'addRound'])->name('round.admin.new');
        Route::get('/view-round/{round_id}',[SystemController::class,'viewRound'])->name('system.admin.round.view');
        Route::get('/view-student/{student_id}/{round_id}/{participation_id}',[SystemController::class,'viewStudent'])->name('system.admin.student.view');
        Route::post('/paid-month',[MoneyController::class,'paid_month'])->name('system.admin.student.paid_month');



    });
    Route::prefix('/admin')->group(function (){
        Route::prefix('/user')->group(function (){
            Route::get('/profile', [UserController::class , 'userProfil'])->name('user.profile.view');
        });

        Route::prefix('/student')->group(function (){
            Route::get("/pre-inscription",[PreInscriptionController::class , 'viewPreInscription'])->name('system.admin.student.view.pre_inscription');
            Route::get('/formation-inscription', [PreInscriptionController::class , 'viewFormationParticipation'])->name('system.admin.student.formation.participation');
            Route::post('/store-pre-inscription', [AdminStudentController::class , 'preinscriptionStore'])->name('system.admin.student.pre_inscription.store');
            Route::get('/check-round/{level_id}',[AdminStudentController::class,'checkRound'])->name('system.admin.student.inscription.check.round');
            Route::post('/check-student-exists',[AdminStudentController::class,'checkStudentForInscription'])->name('system.admin.student.inscription.check.exist');
            Route::post('/formation-student-registration',[AdminStudentController::class,'formationStudentRegistration'])->name('system.admin.student.formation.student.registration');
            Route::get('/set-badge/{student_id}/{round_id}/{participation_id}',[AdminStudentController::class,'setBadge']);
            Route::post('/payment/check-student-exists/',[AdminStudentController::class,'checkStudentForPayment'])->name('system.admin.student.student.check.exist');

            Route::prefix('/payment')->group(function (){
                Route::get('/check-student', [MoneyController::class , 'adminCheckStudentForPayment'])->name('system.admin.student.check.for.payment');
            });
        });

        Route::prefix('/permissions')->group(function (){
            Route::get("/",[PermissionsController::class , 'viewPermissionDashBord'])->name('system.admin.permission.view.permission_manager');
        });
    });

});


