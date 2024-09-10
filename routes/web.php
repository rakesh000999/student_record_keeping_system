<?php

use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentRecordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/faculty", FacultyController::class);
Route::resource('/students', StudentRecordController::class);
