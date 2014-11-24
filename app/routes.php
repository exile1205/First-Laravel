<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('demo2', function()
{
    $projects = Project::all();

    return View::make('project')->with('projects', $projects);
});

Route::controller('project', 'ProjectController');
//Route::get('demo', 'ProjectController@showProject');
//Route::post('demo_post', 'ProjectController@createProject');

