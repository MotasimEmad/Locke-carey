<?php

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
Auth::routes(['register' => false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/client', [App\Http\Controllers\HomeController::class, 'client']);
Route::get('/project', [App\Http\Controllers\HomeController::class, 'project']);
Route::get('/project_country/{country}', [App\Http\Controllers\HomeController::class, 'projects_country']);

Route::get('/contact', function () {
    return view('web.contact');
});


Route::get('/fire-safety-design', [App\Http\Controllers\HomeController::class, 'fire_safety_design']);
Route::get('/fire-safety-engineering', [App\Http\Controllers\HomeController::class, 'fire_safety_engineering']);
Route::get('/facade-and-roofing', [App\Http\Controllers\HomeController::class, 'facade_and_roofing']);
Route::get('/fire-safety-management', [App\Http\Controllers\HomeController::class, 'fire_safety_management']);
Route::get('/smoke-cfd', [App\Http\Controllers\HomeController::class, 'smoke_cfd']);
Route::get('/fire-safety-inspection', [App\Http\Controllers\HomeController::class, 'fire_safety_inspection']);


Route::post('send-email', [App\Http\Controllers\HomeController::class, 'ContactPageSubmit']);


Route::post('contact', [App\Http\Controllers\HomeController::class, 'sendEmail']);

Route::resource('clients', App\Http\Controllers\ClientController::class);
Route::resource('admin/projects', App\Http\Controllers\ProjectController::class);
