<?php

namespace App\Http\Resources;

use App\Track;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TrackdetailsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
         return [
            'statu'=>'0',
            'Track' =>
            [ 'info' => $this->collection,
              'recTracks' => new TracksCollection(Track::with('artist')->limit('18')->get()),
            ],    
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
