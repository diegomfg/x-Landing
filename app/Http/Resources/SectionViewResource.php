<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SectionViewResource extends JsonResource
{
    public $cover;
    public $title;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public function toArray($request)
    {
        return [
            'cover' => $this->cover,
            'title' => $this->title
        ];
    }
}
