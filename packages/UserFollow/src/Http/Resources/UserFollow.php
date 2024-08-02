<?php

namespace Retrocube\UserFollow\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\URL;

class UserFollow extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'               => $this->id,
            'name'             => $this->name,
            'slug'             => $this->slug,
            'image_url'        => (\Storage::exists($this->image_url)) ? \Storage::url($this->image_url) : \URL::to('images/user-placeholder.jpg'),
            'is_follow'        => $this->is_follow,
            'user_follow_slug' => $this->user_follow_slug,
        ];
    }
}
