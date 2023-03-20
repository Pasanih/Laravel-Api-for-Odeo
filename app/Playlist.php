<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table ='tbl_playlist';
    protected $primaryKey = 'playlist_id';
    public $incrementing = false;


    public function user()
    {
        return $this->belongsTo('App\Member','user_id');
    }
    public function playlistdetails()
    {
        return $this->hasMany('App\Playlistdetails','playlist_id');
    }
    public function playlisttracks()
    {
        return $this->hasMany('App\Track','track_id');
    }
}
