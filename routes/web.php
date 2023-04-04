<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])->middleware('auth');
Route::add('GET', '/user', [Controller\Doctor::class, 'user'])->middleware('auth');
Route::add('GET', '/patient', [Controller\Admin::class, 'patient'])->middleware('auth');
Route::add(['GET', 'POST'], '/addPatient', [Controller\Register::class, 'addPatient']);
Route::add(['GET', 'POST'], '/addAdmission', [Controller\Register::class, 'addAdmission']);
Route::add(['GET', 'POST'], '/addOffice', [Controller\Admin::class, 'addOffice']);
Route::add(['GET', 'POST'], '/addDiagnosis', [Controller\Admin::class, 'addDiagnosis']);
Route::add(['GET', 'POST'], '/addAdm', [Controller\Admin::class, 'addAdm']);
Route::add(['GET', 'POST'], '/addUser', [Controller\Admin::class, 'addUser']);
Route::add('GET', '/onePatient', [Controller\Doctor::class, 'onePatient']);
Route::add(['GET', 'POST'], '/oneAdmission', [Controller\Register::class, 'oneAdmission']);
Route::add(['GET', 'POST'], '/updateDiagnosis', [Controller\Doctor::class, 'updateDiagnosis']);
Route::add('GET', '/admission', [Controller\Doctor::class, 'admission'])->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
