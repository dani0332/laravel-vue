<?php

namespace App\Http\Resources;

use Bepsvpt\Blurhash\Facades\BlurHash;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class PublicUser extends JsonResource
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
           'image_url_blur'   => (\Storage::exists($this->image_url)) ? BlurHash::encode(\Storage::path($this->image_url)) : BlurHash::encode(public_path('images/user-placeholder.jpg')),
       ];
    }
}
