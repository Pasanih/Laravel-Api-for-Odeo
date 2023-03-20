<?php

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

use App\Track;


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, Accept, Authorization, X-Requested-With');
/*

header('Access-Control-Allow-Origin' , '*');
header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With');*/

Route::get('/', function () {
    return view('welcome');
  
});

Route::get('/tracks','TrackController@show');

Route::get('/tracks/{trackid}','TrackController@trackdetails');

Route::get('/artists','ArtistController@show');

Route::get('/artists/{artistid}','ArtistController@artistdetails');

Route::get('/albums','AlbumController@show');

Route::get('/albums/{albumid}','AlbumController@albumdetails');

Route::get('/playlists','PlaylistController@show');

Route::get('/playlists/{playlistid}','PlaylistController@playlistdetails');

//Route::get('/tracks',function(){
   // $tracks = DB::table('tbl_track')->limit('20')->get();
   //$tracks = App\Track::limit('20')->get();
   // $tracks = Track::limit('20')->get();
    // $tracks =DB::table('tbl_track')
    //             ->join('tbl_artist','tbl_track.artist_id','=','tbl_artist.artist_id')
    //             ->limit('5') 
    //             ->select('tbl_track.*','tbl_artist.firstname','tbl_artist.lastname') 
    //             ->get();
   // $tracks= Track::find('10')->artist;
    
  //return $tracks;

//});



//Route::get('/tracks/{trackid}', function ($id) {
    // $track = DB::table('tbl_track')->where('intid',$id)->get();
    // $track = App\Track::where('intid',$id)->get();
    //$track = Track::where('intid',$id)->get();
  
   // return $track;
  
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
