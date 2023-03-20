<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //
    protected $table='tbl_artist';
    protected $primaryKey ='artist_id';
    public $incrementing = false;

    public function track()
    {
        return $this->hasMany('App\Track','artist_id');
    }
}
