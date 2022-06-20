<?php

  

use Illuminate\Support\Facades\Route;

  

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Auth\AdminRegController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RegformsController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TodoController;

  

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
Route::get('admin/register', function () {

    return view('admin.auth.register');

});
Route::get('admin/login', function () {

    return view('admin.auth.login');

});
Route::get('manager/register', function () {

    return view('manager.auth.register');

});
Route::get('manager/login', function () {

    return view('manager.auth.login');

});
  

Route::post('/login',[LoginController::class, 'login'])->name('login');
Route::post('/user-register',[RegisterController::class, 'create'])->name('user.register');

Route::post('/admin.register',[AdminRegController::class, 'create'])->name('admin.register');
Route::post('/admin.login',[AdminLoginController::class, 'login'])->name('admin.login');
Auth::routes();

  

/*------------------------------------------

--------------------------------------------

All Normal Users Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:user'])->group(function () {

  

    Route::get('/user/home', [HomeController::class, 'index'])->name('user.home');
    Route::get('/user/regforms', [RegformsController::class, 'index'])->name('user.regforms.list');
    Route::get('/user/create-regforms', [RegformsController::class, 'create'])->name('user.regforms.create');
    Route::post('/user/store-regforms', [RegformsController::class, 'store'])->name('user.regforms.store');
    Route::get('/user/edit-regforms/{id}', [RegformsController::class, 'edit'])->name('user.regforms.edit');
    Route::post('/user/update-regforms/{id}', [RegformsController::class, 'update'])->name('user.regforms.update');
    Route::get('/user/delete-regforms/{id}', [RegformsController::class, 'destroy'])->name('user.regforms.destroy');

    Route::get('/regforms/pdf', [RegformsController::class, 'createPDF']);

    Route::post('file-import', [RegformsController::class, 'FormsImport'])->name('file-import');
    Route::get('/regforms/excel', [RegformsController::class, 'createcsv']);



    Route::get('/user/tasks', [TaskController::class, 'index'])->name('user.tasks.list');
    Route::post('/user/store-tasks', [TaskController::class, 'store'])->name('user.task.store');
    Route::get('/user/edit-task/{id}', [TaskController::class, 'edit'])->name('user.task.edit');
    Route::post('/user/update-task/{id}', [TaskController::class, 'update'])->name('user.task.update');
    Route::get('/user/delete-task/{id}', [TaskController::class, 'destroy'])->name('user.task.destroy');

    Route::get('/user/todo/{id}', [TodoController::class, 'index'])->name('user.todo.list');
    Route::get('/user/create-todo/{id}', [TodoController::class, 'create'])->name('user.todo.create');
    Route::post('/user/store-todo', [TodoController::class, 'store'])->name('user.todo.store');
    Route::get('/user/edit-todo/{id}', [TodoController::class, 'edit'])->name('user.todo.edit');
    Route::post('/user/update-todo/{id}', [TodoController::class, 'update'])->name('user.todo.update');
    Route::get('/user/delete-todo/{id}', [TodoController::class, 'destroy'])->name('user.todo.destroy');

});

  

/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:admin'])->group(function () {

  

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/regforms', [App\Http\Controllers\admin\RegformsController::class, 'index'])->name('admin.regforms.list');
    Route::get('/admin/create-regforms', [App\Http\Controllers\admin\RegformsController::class, 'create'])->name('admin.regforms.create');
    Route::post('/admin/store-regforms', [App\Http\Controllers\admin\RegformsController::class, 'store'])->name('admin.regforms.store');
    Route::get('/admin/edit-regforms/{id}', [App\Http\Controllers\admin\RegformsController::class, 'edit'])->name('admin.regforms.edit');
    Route::post('/admin/update-regforms/{id}', [App\Http\Controllers\admin\RegformsController::class, 'update'])->name('admin.regforms.update');
    Route::get('/admin/delete-regforms/{id}', [App\Http\Controllers\admin\RegformsController::class, 'destroy'])->name('admin.regforms.destroy');

    Route::get('/regforms/pdf', [App\Http\Controllers\admin\RegformsController::class, 'createPDF']);

    Route::post('file-import', [App\Http\Controllers\admin\RegformsController::class, 'FormsImport'])->name('file-import');
    Route::get('/regforms/excel', [App\Http\Controllers\admin\RegformsController::class, 'createcsv']);



    Route::get('/admin/tasks', [App\Http\Controllers\admin\TaskController::class, 'index'])->name('admin.tasks.list');
    Route::post('/admin/store-tasks', [App\Http\Controllers\admin\TaskController::class, 'store'])->name('admin.task.store');
    Route::get('/admin/edit-task/{id}', [App\Http\Controllers\admin\TaskController::class, 'edit'])->name('admin.task.edit');
    Route::post('/admin/update-task/{id}', [App\Http\Controllers\admin\TaskController::class, 'update'])->name('admin.task.update');
    Route::get('/admin/delete-task/{id}', [App\Http\Controllers\admin\TaskController::class, 'destroy'])->name('admin.task.destroy');

    Route::get('/admin/todo/{id}', [App\Http\Controllers\admin\TodoController::class, 'index'])->name('admin.todo.list');
    Route::get('/admin/create-todo/{id}', [App\Http\Controllers\admin\TodoController::class, 'create'])->name('admin.todo.create');
    Route::post('/admin/store-todo', [App\Http\Controllers\admin\TodoController::class, 'store'])->name('admin.todo.store');
    Route::get('/admin/edit-todo/{id}', [App\Http\Controllers\admin\TodoController::class, 'edit'])->name('admin.todo.edit');
    Route::post('/admin/update-todo/{id}', [App\Http\Controllers\admin\TodoController::class, 'update'])->name('admin.todo.update');
    Route::get('/admin/delete-todo/{id}', [App\Http\Controllers\admin\TodoController::class, 'destroy'])->name('admin.todo.destroy');

    
    Route::get('/admin/users-list', [App\Http\Controllers\admin\UsersController::class, 'index'])->name('admin.list-users');

});

  

/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:manager'])->group(function () {

  

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');

});

 