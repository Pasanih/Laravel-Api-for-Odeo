<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PlaylistsCollection;
use App\Http\Resources\PlaylistsdetailsCollection;
use App\Http\Resources\TracksCollection;
use App\Playlist;
use App\Member;
use App\Artist;
use App\Playlistdetails;
use DB;

class PlaylistController extends Controller
{
    public function show()
    {
        return new PlaylistsCollection(Playlist::with('user')->limit('30')->get());
        //$playlist = Playlist::get();

        //return $playlist;

       // foreach ($playlist as $userid) {
           // echo $userid->user_id;
           //return Playlist::with('user')->limit('30')->get();
           //return new PlaylistsCollection(Playlist::with('user')->limit('30')->get());
         /*  return response ([
            'Playlists'=> Playlist::with('user')->limit('30')->get(),
             ]);
             */
        //}
        
    }

    public function playlistdetails($id)
    {
       // $list = Playlist::with('user','playlistdetails')->where('playlist_id',$id)->get();
        //return $list;

       // return new PlaylistsCollection(Playlist::with('user')->where('playlist_id',$id)->get());
      // return response ([
        
      //    new PlaylistsCollection(Playlist::with('user')->where('playlist_id',$id)->get()),
         // new TracksCollection(Track::with('artist')->where('album_id',$id)->get()),
       
       // 'status'=>'ok'

      //  ]);
        
       
       //return new TracksCollection(Playlistdetails::with('playlisttrackdetails','artist')->where('playlist_id',$id)->get());
       
      // $trackdetails = Playlistdetails::where('playlist_id',$id)->get();
      // return $trackdetails;

  /*  $playlists = DB::table('tbl_playlist')
      ->join('tbl_playlist_details','tbl_playlist.playlist_id','=','tbl_playlist_details.playlist_id')
      ->join('tbl_track','tbl_playlist_details.track_id','=','tbl_track.track_id')
      ->join('tbl_artist','tbl_track.artist_id','=','tbl_artist.artist_id')
       ->select('tbl_track.*','tbl_artist.firstname as name') 
       ->where('tbl_playlist.playlist_id',$id)->get();
         return $playlists;*/


         return response ([
            'status'=>'0',
            'Playlists'=>
            [
                new PlaylistsCollection(Playlist::with('user')->where('playlist_id',$id)->get()),
                new PlaylistsdetailsCollection(DB::table('tbl_playlist')
                ->join('tbl_playlist_details','tbl_playlist.playlist_id','=','tbl_playlist_details.playlist_id')
                ->join('tbl_track','tbl_playlist_details.track_id','=','tbl_track.track_id')
                ->join('tbl_artist','tbl_track.artist_id','=','tbl_artist.artist_id')
                 ->select('tbl_track.*','tbl_artist.*') 
                 ->where('tbl_playlist.playlist_id',$id)->get()),
            ],
           // 'status'=>'ok'

    ]);



    }
}
