<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Employee\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\OrderC;
use App\Http\Controllers\ProductC;
use App\Http\Controllers\RuanganC;
use App\Http\Controllers\Student\StudentController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function   () {
    return view('master.master');
});
Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/auth', [loginController::class, 'authenticate'])->name('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::group([
    "prefix" => "/dashboard",
    "as"     => "dashboard.admin."
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    });

Route::get('/master_admin/tampil', function () {
    return view('master_admin.tampil');
})->name('tampil.admin');

Route::get('/master_admin/tambah', function () {
    return view('master_admin.tambah');
})->name('tambah.admin');

// student
Route::get('/students/tambahS', [StudentController::class, 'tambahS'])->name('students.tambahS');
Route::get('/students', [StudentController::class, 'index'])->middleware('auth')->name('student');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

//employee
Route::get('/employee/tambahE', [EmployeeController::class, 'tambahE'])->name('employee.tambahE');
Route::get('/employee', [EmployeeController::class, 'index'])->middleware('auth')->name('employee');
Route::post('/employee', [EmployeeController::class, 'store'])->name('employee.store');

//room_management
Route::group([
    'prefix' => 'room-management',
    'as'     => 'room_management.'
], function () {
    Route::get('/room', [RuanganC::class, 'index'])->name('room.tampilR');
    Route::post('/room/store', [RuanganC::class, 'store'])->name('room.store');
    Route::get('/room/create', [RuanganC::class, 'tambahR'])->name('room.tambahR');
    Route::post('/room/chooseEmployee', [RuanganC::class, 'employeeToRoom'])->name('room.employeeToRoom');
    Route::get('/room/view', [RuanganC::class, 'viewEmployeeToRoom'])->name('room.viewEmployeeToRoom');
});

//product
Route::group([
    'prefix' => 'product-management',
    'as'     => 'product_management.'
], function () {
    Route::get('/product', [ProductC::class, 'index'])->name('product.tampilP');
    Route::post('/product/store', [ProductC::class, 'store'])->name('product.store');
    Route::get('/product/create', [ProductC::class, 'tambahP'])->name('product.tambahP');
});

//order
Route::group([
    'prefix' => "/order",
    'as'     => "order."
], function () {
    Route::get("/", [OrderC::class, 'index'])->name('index');
    Route::post('/process', [OrderC::class, 'order'])->name('process');
    Route::get('/history', [OrderC::class, 'history'])->name('history');
});