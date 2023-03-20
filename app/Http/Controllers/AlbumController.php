<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\AlbumsCollection;
use App\Http\Resources\AlbumsdetailsCollection;
use App\Http\Resources\TracksCollection;
use App\Album;
use App\Track;
use DB;

class AlbumController extends Controller
{
    //
    public function show()
    {

       // $ablbum = Album::with('artist')->limit('5')->get();
       // return $ablbum;
       return new AlbumsCollection(Album::with('artist')->limit('18')->get());
    }

    public function albumdetails($id)
    {
       // $ablbum = Album::with('artist','tracks')->where('album_id',$id)->get();
     /*  $ablbum = DB::table('tbl_album')
      ->join('tbl_artist','tbl_album.artist_id','=','tbl_artist.artist_id')
      ->join('tbl_track','tbl_album.album_id','=','tbl_track.album_id')
       ->select('tbl_album.*','tbl_artist.firstname','tbl_artist.lastname') 
       ->where('tbl_track.album_id',$id)->get();
         return $ablbum;
         */


         return response ([
            'albums'=>
            [
              new AlbumsdetailsCollection(Album::with('artist')->where('album_id',$id)->get()),
              new TracksCollection(Track::with('artist')->where('album_id',$id)->get()),
            ],
           // 'status'=>'ok'

    ]);

    }
}
