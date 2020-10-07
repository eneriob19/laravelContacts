<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

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

Route::get('/welcome', function () {
    return view('welcome');
});


/*
* @Autthor: Butch B. Enerio
* @Created date: October 7, 2020
* @Description: routes for contacts
*/
//---VIEW ROUTES
Route::view('/insertContact', 'insertContact');
Route::view('contactlist', 'listContacts');

//---GET ROUTES
Route::get('/contacts', [ContactsController::class, 'list']);
Route::get('/contact/{id}', [ContactsController::class, 'getContact']);
Route::get('/contact/delete/{id}', [ContactsController::class, 'deleteContact']);

//---POST ROUTES
Route::post('/newContact/insert', [ContactsController::class, 'insertContact']);
Route::post('/contact/update/{id}', [ContactsController::class, 'updateContact']);
