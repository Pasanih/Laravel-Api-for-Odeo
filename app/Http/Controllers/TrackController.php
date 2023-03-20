<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Track;

use App\Http\Resources\Tracks as TracksResource;
use App\Http\Resources\TracksCollection;
use App\Http\Resources\TrackdetailsCollection;

class TrackController extends Controller
{
    //
    public function show()
    {

        // return response ([

        //         'data'=> Track::limit('10')->get(),
        //         'artists'=>Track::find('10')->artist

        // ]);


        //$tracks = Track::limit('20')->get();

       // $tracks = Track::with('artist')->limit('5')->get();
       // $tracks = Track::has('aaa')->limit('5')->get();
       
       
       //8888888888888888888888888   BEFORE RESOURCES ADDDED -- |     $tracks = Track::with('featuredartists','artist')->limit('8')->get();
       

       
        // $tracks = Track::has('featuredartists')->get();

       // $tracks = Track::find('10')->artist;
     

        
            //return $tracks;

        //************************************** BEFORE RESOURCES ADDED --|      return response()->json($tracks);
       // return TracksResource::collection(Track::with('artist')->limit('10')->get());
       return new TracksCollection(Track::with('artist')->limit('18')->get());

            /*return response()->json($tracks)->header('Access-Control-Allow-Origin' , '*')->
            header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE')->
            header('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With');;
*/
       

    }

    public function trackdetails($id)
    {
       // $track = Track::with('artist')->where('track_id',$id)->get();

       // return $track;
       return new TrackdetailsCollection(Track::with('artist')->where('track_id',$id)->get());
       
    }

}
