<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlistdetails extends Model
{
    protected $table = 'tbl_playlist_details';
    //protected $primaryKey = '';
    public $incrementing = false;

  public function playlisttrackdetails()
  {
    return $this->belongsTo('App\Track','track_id');
  }
  public function artist()
  {
      return $this->belongsTo('App\Artist','artist_id');
  }
    
}
