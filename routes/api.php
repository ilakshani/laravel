<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//use App\Person;

Route::get("/aa", "Youtube@index");

Route::get("/getalldetails", "BookController@Bindex");

Route::post("/insertnewbook", "BookController@Binsert");

Route::post("/deletebook", "BookController@deleteField");

Route::get("/booklist", "BookController@dis5playBookList");

Route::get("/authorlist", "BookController@displayAuthorList");

Route::get("/quantity", "BookController@availability");

Route::patch("editbookdetails/{id}", "BookController@updatebook");


