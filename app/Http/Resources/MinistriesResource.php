<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MinistriesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'         => $this->id,
            'title_en'   => $this->title_en,
            'title_ar'   => $this->title_ar,
            'title_kr'   => $this->title_kr,
            'logo'       => $this->logo,
            'krg'        => $this->krg,
            'address'    => $this->address,
            'gps_lat'    => $this->gps_lat,
            'gps_lon'    => $this->gps_lon,
            'website'    => $this->website,
            'created_by' => $this->created_by,
        ];
    }
}
