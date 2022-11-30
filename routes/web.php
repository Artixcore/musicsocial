<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'Frontend\UserController@welcome');
Route::get('post/{post_id}', 'Frontend\UserController@single_post');


Auth::routes();

// Frontend

// Band
Route::get('band', 'Band\BandController@get_page');

// Post
Route::post('new-post',  'Frontend\PostController@new_post');

// Route::get('/', function () { return view('welcome');});
// Profile
Route::get('profile/{name}',  'Frontend\UserController@profile');

// Edit
Route::get('edit/{name}',  'Frontend\UserController@edit');
Route::post('edit/{id}',  'Frontend\UserController@save_general');

// Security
Route::get('security/{name}',  'Frontend\UserController@security');
Route::post('security',  'Frontend\UserController@ChangePassword');

// Device
Route::get('device', 'Frontend\UserController@device');


Route::post('update-ava','Frontend\UserController@update_avatar');
Route::post('updatecover','Frontend\UserController@update_cover');

Route::get('changestatus', 'Frontend\UserController@status')->name('changestatus');

// Profile Abouts
Route::get('about/{name}',  'Profile\ProfileController@about');
Route::get('about/edit/{name}',  'Profile\ProfileController@about_edit');
Route::post('editabout',  'Profile\ProfileController@about_post');
Route::post('updateabout/{id}',  'Profile\ProfileController@about_update');

// Professional
Route::get('professional/{name}', 'Profile\ProfileController@professional');
Route::get('professional/edit/{name}',  'Profile\ProfileController@professional_edit');
Route::post('editprofessional',  'Profile\ProfileController@professional_post');
Route::post('updateprofessional/{id}',  'Profile\ProfileController@professional_update');

// Studied
Route::get('studied/{name}', 'Profile\ProfileController@studied');
Route::get('studied/edit/{name}',  'Profile\ProfileController@studied_edit');
Route::post('editstudied',  'Profile\ProfileController@studied_post');
Route::post('updatestudied/{id}',  'Profile\ProfileController@studied_update');

// Work
Route::get('work/{name}', 'Profile\ProfileController@work');
Route::get('work/edit/{name}',  'Profile\ProfileController@work_edit');
Route::post('editwork',  'Profile\ProfileController@work_post');
Route::post('updatework/{id}',  'Profile\ProfileController@work_update');

// Relation
Route::get('relation/{name}', 'Profile\ProfileController@relation');
Route::get('relation/edit/{name}',  'Profile\ProfileController@relation_edit');
Route::post('editrelation',  'Profile\ProfileController@relation_post');
Route::post('updaterelation/{id}',  'Profile\ProfileController@relation_update');

// Livin
Route::get('livin/{name}', 'Profile\ProfileController@livein');
Route::get('livin/edit/{name}',  'Profile\ProfileController@livin_edit');
Route::post('editlivin',  'Profile\ProfileController@livin_post');
Route::post('updatelivin/{id}',  'Profile\ProfileController@livin_update');

// Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UserController',['except' => ['show','create','store']]);
});


// SuperAdmin
Route::namespace('Superadmin')->prefix('superadmin')->name('superadmin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UserController',['except' => ['show','create','store']]);
});
