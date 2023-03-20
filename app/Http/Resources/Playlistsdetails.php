<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Playlistsdetails extends Resource
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
           'title'=>$this->track_name,
           'subtitle'=>$this->track_id,
           'track_id'=>$this->track_id,
           'url'=>$this->track_path,
           'thumb'=>'./assets/images/tracks/'.$this->upload_path,
           'artist_id'=>$this->artist_id,
           'like_count'=>$this->like_count,
           'play_count'=>$this->play_count,
           'rating'=>$this->track_id,
           'artist'=>[
           'stagename'=>$this->stagename,
           'dob'=>$this->dob,
           'gender'=>$this->gender,
           'image_name'=>$this->image_name,
           'like_count'=>$this->like_count,
           'follow_count'=>$this->follow_count,
           'artist_id'=>$this->artist_id,
           'name'=>$this->firstname.' '.$this->lastname,
           ]
          ];
    }
}
