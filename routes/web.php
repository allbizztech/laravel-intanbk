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

Route::get('/', function () {
    return view('welcome');
});

Route::get('nama', function()  {
    echo "Nama saya ...";
});

// Required Parameters
Route::get('profil/{nama}', function ($nama) {
    echo "Profil: " . $nama;
});

// Optional Parameters using `?`
Route::get('detail/{nama}/{umur?}', function ($nama, $umur = 0) {
    echo "Profil: " . $nama;
    echo "<br>Umur: " . $umur;
});

// Route & View Example
Route::get('profil-pengguna/{nama}', function($nama){
    $array = ['Red', 'Blue', 'Black'];
    return view('profil', compact('nama', 'array'));
});

// Form Example
Route::get('profile/{nama}', 'ProfileController@profile');
Route::get('profile-form', 'ProfileController@getForm');
Route::post('profile-form', 'ProfileController@postForm');

// Profile CRUD manually
Route::get('profiles', 'ProfileController@index');
Route::get('profiles/all', 'ProfileController@index_all');
Route::get('profiles/trash', 'ProfileController@trash_bin');
Route::get('profiles/create', 'ProfileController@create');
Route::post('profiles/store', 'ProfileController@store');
Route::get('profiles/edit/{id}', 'ProfileController@edit');
Route::post('profiles/update/{id}', 'ProfileController@update');
Route::get('profiles/delete/{id}', 'ProfileController@destroy');

// Controller Resources
Route::resource('categories', 'CategoryController');
Route::resource('tags', 'TagController');
Route::resource('posts', 'PostController');

// PDF Example
Route::get('pdf-c', 'PdfController@using_controller');
Route::get('pdf-v', 'PdfController@using_view');

// Email Example
Route::get('email', 'PdfController@test_mail');
