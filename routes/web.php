<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class , 'index'])->name('home.page.view');


Route::get('/home', [StudentController::class , 'read_student_inscripted'])->name('student.view_inscripted');
Route::get('/create-student', [StudentController::class , 'create_student'])->name('student.create');
Route::get('/edit-student/{studentId}', [StudentController::class , 'edit_student'])->name('student.edit');
Route::get('/detail-student/{studentId}', [StudentController::class , 'detail_student'])->name('student.details');
Route::post('/store-student', [StudentController::class , 'store_student'])->name('student.store');
Route::put('/update-student/{studentId}', [StudentController::class , 'update_student'])->name('student.update');
Route::get('/current-amount-inscription/{studentId}', [StudentController::class , 'amount_inscription'])->name('read.current_amount_inscription');
Route::get('/current-amount-formation/{paymentId}', [StudentController::class , 'amount_formation'])->name('read.current_amount_formation');
Route::put('/update-amount-inscription/{studentId}', [StudentController::class , 'update_amount_inscription'])->name('update.current_amount_inscription');
Route::put('/update-amount-formation/{paymentId}', [StudentController::class , 'update_amount_formation'])->name('update.current_amount_formation');
Route::post('/store-student-payment/{studentId}', [StudentController::class , 'store_student_payment'])->name('student.store.payment');
Route::get('/statistic-of-system', [StudentController::class , 'statistic_of_system'])->name('system.statistic');

Route::get('/view-students-by-status/{status}', [StudentController::class , 'student_by_status'])->name('system.student.by.status');




