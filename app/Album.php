<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'tbl_album';
    protected $primaryKey ='album_id';
    public $incrementing = false;

    public function artist()
    {
        return $this->belongsTo('App\Artist','artist_id');
    }

}
