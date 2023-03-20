<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Artist;

use App\Http\Resources\ArtistsCollection;

class ArtistController extends Controller
{
    //
    public function show()
    {
       // $artists = Artist::limit('5')->get();
       // return $artists;

       return new ArtistsCollection(Artist::limit('12')->get());

    }

    public function artistdetails($id)
    {
        
        //$artistdetails = Artist::where('artist_id',$id)->get();

       // $artistdetails = Artist::where('artist_id',$id)->get();
       //$artisttrackdetails = Artist::find($id)->track;

        return response ([
                'artist'=>Artist::where('artist_id',$id)->get(),
                'tracks'=>Artist::find($id)->track,
                'status'=>'ok'

        ]);
       //return $artistdetails;

        // $res = DB::table('tbl_artist')
        //             ->join('tbl_track','tbl_track.artist_id','=','tbl_artist.artist_id')
        //             ->where('tbl_artist.artist_id','=',$id)
        //             ->select('tbl_track.*','tbl_artist.firstname','tbl_artist.lastname') 
        //             ->get();

        //             return $res;
    }
}
