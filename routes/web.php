<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route:: get('/students',[StudentController::class, 'index'])->name('students');

route:: get('/teachers',[TeacherController::class, 'index'])->name('teachers');




// products sections 
Route:: get ('/products',[ProductController::class, 'index'])->name('products');
// store
Route:: get ('/products/create',[ProductController::class, 'create'])->name('products.create');
Route:: post ('/products/store',[ProductController::class, 'store'])->name('products.store');
// delete
Route:: get ('/products/destroy/{id}',[ProductController::class, 'destroy'])->name('products.destroy');
// edit
Route:: get ('/products/edit/{id}',[ProductController::class, 'edit'])->name('products.edit');
Route:: post ('/products/update',[ProductController::class, 'update'])->name('products.update');

Route::get('students/create', [StudentController::class, 'create'])->name('student.create');
Route::post('students/store', [StudentController::class, 'store'])->name('student.store');


Route::get('/customers',[CustomerController::class, 'index'])->name('customers');
Route::get('/customers/create',[CustomerController::class, 'create'])->name('customer.create');
Route::post('/customers/store',[CustomerController::class, 'store'])->name('customer.store');
Route::get('customers/edit/{id}',[CustomerController::class, 'edit'])->name('customer.edit');
Route::post('customers/update',[CustomerController::class, 'update'])->name('customer.update');
Route::get('customer/delete/{id}',[CustomerController::class, 'destroy'])->name('customer.delete');