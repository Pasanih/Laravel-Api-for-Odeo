<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Albums extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'album_id'=>$this->album_id,
            'title'=>$this->album_name,
            'subtitle'=>$this->artist_id,
            'artist'=>$this->artist->firstname.' '.$this->artist->lastname,
            'artist_id'=>$this->artist_id,
            'likes'=>$this->artist_id,
            'shares'=>$this->artist_id,
            'thumbs'=>'./assets/images/albums/'.$this->upload_path,
            'releasedOn'=>$this->artist_id,
            'genere'=>$this->artist_id,
            'musicBy'=>$this->artist_id,
            'name'=>$this->artist_id,
            'rate'=>$this->artist_id,
        ];

    }
}
