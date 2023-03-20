<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Featuredartist extends Model
{
    //
    protected $table ='tbl_featured_artist';
    protected $primaryKey ='track_id';
    public $incrementing = false;

    public function featureddetails()
    {
        return $this->hasMany('App\Artist','artist_id');
       // return $this->hasManyThrough('App\Artist', 'App\Track','artist_id','artist_id');
    }
}
