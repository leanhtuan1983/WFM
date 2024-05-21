<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProcessingController;
use App\Http\Controllers\JobProcedureController;
use App\Http\Controllers\RoleController;

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

Route::get('/login', [AdminController::class,'showlogin']);
Route::post('/', [AdminController::class,'login'])->name('login');
Route::get('/', [AdminController::class,'logout'])->name('logout');
Route::get('/setting/user/create', [AdminController::class,'createUser'])->name('setting.user.create');
Route::post('/setting/user/store', [AdminController::class,'storeUser'])->name('setting.user.store');



Route::prefix('procedure')->group(function () {
    Route::get('/', [ProcedureController::class,'index'])->name('procedure.index');
    Route::get('/create', [ProcedureController::class,'create'])->name('procedure.create');
    Route::post('/store', [ProcedureController::class,'store'])->name('procedure.store');
    Route::get('/edit/{id}', [ProcedureController::class,'edit'])->name('procedure.edit');
    Route::post('/update/{id}', [ProcedureController::class,'update'])->name('procedure.update');
    Route::get('/delete/{id}', [ProcedureController::class,'delete'])->name('procedure.delete');
   });


Route::prefix('processing')->group(function () {
    Route::get('/', [ProcessingController::class,'index'])->name('processing.index');
    Route::get('/create', [ProcessingController::class,'create'])->name('processing.create');
    Route::post('/store', [ProcessingController::class,'store'])->name('processing.store');
    Route::get('/edit/{id}', [ProcessingController::class,'edit'])->name('processing.edit');
    Route::post('/update/{id}', [ProcessingController::class,'update'])->name('processing.update');
    Route::get('/delete/{id}', [ProcessingController::class,'delete'])->name('processing.delete');
   });

Route::prefix('job')->group(function () {
    Route::get('/', [JobProcedureController::class,'index'])->name('job.index');
    Route::get('/create', [JobProcedureController::class,'create'])->name('job.create');
    Route::post('/store', [JobProcedureController::class,'store'])->name('job.store');
    Route::get('/show/{id}', [JobProcedureController::class,'show'])->name('job.show');
    Route::get('/showitem/{id}', [JobProcedureController::class,'showitem'])->name('job.showitem');
    Route::post('/updateitem/{id}', [JobProcedureController::class,'updateprocess'])->name('job.updateprocess');
    Route::get('/edit', [JobProcedureController::class,'edit'])->name('job.edit');
    Route::post('/update/{id}', [JobProcedureController::class,'update'])->name('job.update');
    Route::get('/delete/{id}', [JobProcedureController::class,'delete'])->name('job.delete');

    Route::get('/chart/{id}', [JobProcedureController::class,'viewchartprocess'])->name('job.chart');
   });

Route::prefix('department')->group(function () {
    Route::get('/', [DepartmentController::class,'index'])->name('department.index');
    Route::get('/create', [DepartmentController::class,'create'])->name('department.create');
    Route::post('/store', [DepartmentController::class,'store'])->name('department.store');
    Route::get('/edit/{id}', [DepartmentController::class,'edit'])->name('department.edit');
    Route::post('/update/{id}', [DepartmentController::class,'update'])->name('department.update');
    Route::get('/delete/{id}', [DepartmentController::class,'delete'])->name('department.delete');
   });

Route::prefix('setting')->group(function () {
    Route::get('/', [SettingController::class,'index'])->name('setting.index');
    Route::get('/role', [RoleController::class,'index'])->name('setting.role.index');
    //Route::post('/store', [DepartmentController::class,'store'])->name('department.store');
    //Route::get('/edit/{id}', [DepartmentController::class,'edit'])->name('department.edit');
    //Route::post('/update/{id}', [DepartmentController::class,'update'])->name('department.update');
    //Route::get('/delete/{id}', [DepartmentController::class,'delete'])->name('department.delete');
   });

   Route::prefix('role')->group(function () {
    //Route::get('setting/role', [RoleController::class,'index'])->name('setting.role.index');
    //Route::post('/store', [DepartmentController::class,'store'])->name('department.store');
    //Route::get('/edit/{id}', [DepartmentController::class,'edit'])->name('department.edit');
    //Route::post('/update/{id}', [DepartmentController::class,'update'])->name('department.update');
    //Route::get('/delete/{id}', [DepartmentController::class,'delete'])->name('department.delete');
   });

