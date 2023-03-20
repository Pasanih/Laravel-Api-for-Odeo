<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    //
   protected $table ='tbl_track';
   protected $primaryKey = 'track_id';
   public $incrementing = false;
  

   public function artist()
   {
       return $this->belongsTo('App\Artist','artist_id');
   }

   public function featuredartists()
   {
       return $this->hasMany('App\Featuredartist','track_id');
   }

   public function featureartistdetails()
   {
        return $this->belongsTo('App\Artist','artist_id');
   }
  

 
}
