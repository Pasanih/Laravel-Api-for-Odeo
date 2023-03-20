<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Playlists extends Resource
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
        'title'=>$this->playlist_name,
        'subtitle'=>$this->playlist_id,
        'rating'=>$this->playlist_id,
        'followers'=>$this->follow_count,
        'likes'=>$this->like_count,
        'createdOn'=>$this->strdate,
        'playlist_id'=>$this->playlist_id,
        'user'=>[
        'member_id'=>$this->user->member_id,
        'firstname'=>$this->user->firstname,
        'lastname'=>$this->user->lastname,
        'nickname'=>$this->user->artist_id,
        'dob'=>$this->user->artist_id,
        'show_dob_year'=>$this->user->artist_id,
        'gender'=>$this->user->gender,
        'email'=>$this->user->email,
        'nickname'=>$this->user->nickname,
        'dob'=>$this->user->dob,
        'telephone'=>$this->user->telephone,
        'mobile'=>$this->user->mobile,
        'occupation_id'=>$this->user->occupation_id,
        'country_id'=>$this->user->country_id,
        'state_id'=>$this->user->state_id,
        'city_id'=>$this->user->city_id,
        'image_name'=>$this->user->image_name,
        'registered_date'=>$this->user->registered_date,
        'status'=>$this->user->status,
        'fb_id'=>$this->user->fb_id,
        'image_url'=>'assets/images/playlists/'.$this->playlist_id.'.jpg'
        ],

    ];
    }
}
