<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Tracks extends Resource
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
           'stagename'=>$this->artist->stagename,
           'dob'=>$this->artist->dob,
           'gender'=>$this->artist->gender,
           'image_name'=>$this->artist->image_name,
           'like_count'=>$this->artist->like_count,
           'follow_count'=>$this->artist->follow_count,
           'artist_id'=>$this->artist->artist_id,
           'name'=>$this->artist->firstname.' '.$this->artist->lastname,
           ],
           'artist_name'=>$this->artist->firstname.' '.$this->artist->lastname
          // 'status'=>'ok'
       ];
    }
}
