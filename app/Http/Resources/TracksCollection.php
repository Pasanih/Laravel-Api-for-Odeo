<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TracksCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'statu'=>'0',
            'Tracks' => $this->collection,
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
