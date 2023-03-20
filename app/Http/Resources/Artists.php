<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Artists extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
       return [
        'title'=>$this->firstname.' '.$this->lastname,
        'subtitle'=>$this->sinhala_name,
        'artist_id'=>$this->artist_id,
        'like_count'=>$this->artist_id,
        'follow_count'=>$this->artist_id,
        'thumbs'=>'./assets/images/artists/'.$this->image_name,
        'artist'=>[
        'stagename'=>$this->artist_id,
        'dob'=>$this->artist_id,
        'gender'=>$this->artist_id,
        'image_name'=>'./assets/images/artists/'.$this->image_name,
        'like_count'=>$this->artist_id,
        'follow_count'=>$this->artist_id,
        'artist_id'=>$this->artist_id,
        'name'=>$this->artist_id,
        ],
        'rate'=>$this->artist_id,
    ];
    }
}
