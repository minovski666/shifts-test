<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/shift');
});

Route::get('/shift', [App\Http\Controllers\ShiftController::class, 'index']);
Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('all-employees');
Route::get('/view-employee/{employee}', [App\Http\Controllers\EmployeeController::class, 'viewEmployee'])->name('view-employee');
Route::get('/shift-import', [App\Http\Controllers\ShiftController::class, 'shiftImport'])->name('import-shift');
Route::post('/import', [App\Http\Controllers\ShiftController::class, 'import'])->name('import');
Route::put('edit_shift/{id}', [App\Http\Controllers\ShiftController::class, 'update'])->name('edit-shift');
Route::delete('delete_shift/{id}', [App\Http\Controllers\ShiftController::class, 'destroy'])->name('delete-shift');
Route::get('create_shift', [App\Http\Controllers\ShiftController::class, 'create'])->name('create-shift');
Route::post('store_shift', [App\Http\Controllers\ShiftController::class, 'store'])->name('store-shift');
Route::get('update_shift/{id}', [App\Http\Controllers\ShiftController::class, 'show'])->name('update-shift');
Route::post('filter_data/', [App\Http\Controllers\ShiftController::class, 'filter'])->name('filter-shift');


