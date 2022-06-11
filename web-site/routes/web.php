<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "App\Http\Controllers\SiteController@main_page");

Route::get('projects', "App\Http\Controllers\SiteController@projects_page");

Route::get('/cooperation', "App\Http\Controllers\SiteController@get_message");

Route::post('/message_sent', "App\Http\Controllers\SiteController@send_info");

Route::get('/project/{name}', "App\Http\Controllers\SiteController@get_project");




