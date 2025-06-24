<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;

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
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {

    // Only admins can access these:
    Route::middleware(function ($request, $next) {
        if (auth()->user() && auth()->user()->role === 'admin') {
            return $next($request);
        }
        abort(403, 'Unauthorized');
    })->group(function () {
        Route::resource('departments', DepartmentController::class);
        Route::resource('employees', EmployeeController::class);
    });

});
