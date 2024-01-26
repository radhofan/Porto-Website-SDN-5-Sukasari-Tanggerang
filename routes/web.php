<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
Route::get('/loginstudent', [StudentController::class, 'Login'])->name('loginstudent.login');
Route::get('/layoutstudentmenu', [StudentController::class, 'LayoutStudentMenu'])->name('studentmenu.layoutstudentmenu');

Route::post('/loginstudent', [StudentController::class, 'Submit'])->name('loginstudent.submit');


Route::get('/layoutstudentmenu/dataprofil', function () {
    return view('studentmenu.dataprofil');
})->name('studentmenu.dataprofil');

Route::get('/layoutstudentmenu/nilai', function () {
    return view('studentmenu.nilai');
})->name('studentmenu.nilai');

Route::get('/layoutstudentmenu/absen', function () {
    return view('studentmenu.absen');
})->name('studentmenu.absen');

Route::get('/layoutstudentmenu/rapor', function () {
    return view('studentmenu.rapor');
})->name('studentmenu.rapor');
