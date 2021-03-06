<?php

use App\Http\Controllers\PagesController;

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

Route::get('/', 'PagesController@getIndex');
Route::get('/teams', 'PagesController@getTeamPage');
Route::get('/team', 'PagesController@getOneTeamPage');
Route::get('/myteams', 'PagesController@getMyTeamsPage');
Route::get('/mytournaments', 'PagesController@getMyTournamentsPage');
Route::get('/players', 'PagesController@getPlayerPage');
Route::get('/allplayers', 'PagesController@getAllPlayersPage');
Route::resource('players', 'PlayerController');
Route::resource('teams', 'TeamController');
Route::resource('tournaments', 'TournamentController');