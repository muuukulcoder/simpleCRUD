<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/welcome', function () {
    return view('welcome');
});
Route::view('photo','photo');



//                  CRUD-> R                
// all view list of Student.....
Route::get('userprofile',[StudentController::class, 'users']);

//                  CRUD-> C               
// Create Operation Route
// after using this route we can connect create function() of Controller........
Route::view('add', 'add-student');
Route::post('add',[StudentController::class, 'add']);

//                  CRUD-> D               
// Delete Operation Route
// After using this route we can connect delete function() of Controller........
Route::get('delete/{id}',[StudentController::class, 'delete']);

//                  CRUD-> U              
// Update Operation Route
// After using this route we can connect Update function() of Controller........
Route::get('update/{id}',[StudentController::class, 'data']);
Route::put('update-student/{id}',[StudentController::class, 'update']);

//                  *Search*
// This Rout will call Laravel Search function...........
Route::get('search', [StudentController::class,'search']);


