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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tracks','TrackController@show');
Route::get('/tracks/{trackid}','TrackController@trackdetails');
Route::get('/artists','ArtistController@show');
Route::get('/artists/{artistid}','ArtistController@artistdetails');
Route::get('/albums','AlbumController@show');
Route::get('/albums/{albumid}','AlbumController@albumdetails');
Route::get('/playlists','PlaylistController@show');
Route::get('/playlists/{playlistid}','PlaylistController@playlistdetails');