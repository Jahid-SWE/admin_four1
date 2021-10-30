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

Route::get('/',[
    'uses'          =>  'App\Http\Controllers\loginController@index',
    'as'            =>  '/',
    'middleware'    =>  ['guest:'.config('fortify.guard')]
]);


Route::get('/dashboard',[
    'uses'          =>  'App\Http\Controllers\DashboardController@index',
    'as'            =>  'dashboard',
    'middleware'    =>  ['auth:sanctum', 'verified']
]);

Route::get('/manage-category',[
    'uses'          =>  'App\Http\Controllers\CategoryController@index',
    'as'            =>  'manage-category',
    'middleware'    =>  ['auth:sanctum', 'verified']
]);
Route::post('/new-category',[
    'uses'          =>  'App\Http\Controllers\CategoryController@create',
    'as'            =>  'new-category',
    'middleware'    =>  ['auth:sanctum', 'verified']
]);
Route::get('/manage-brand',[
    'uses'          =>  'App\Http\Controllers\BrandController@index',
    'as'            =>  'manage-brand',
    'middleware'    =>  ['auth:sanctum', 'verified']
]);


