<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SectionViewResource extends JsonResource
{
    /**
     * The url of the image that will serve as the cover image for the section.
     * @TODO Solve FIle Upload
     * @var String $cover
     */
    public $cover;

    /**
     * The title of the section, string formatted and html escaped.
     * @var String $title
     */
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
