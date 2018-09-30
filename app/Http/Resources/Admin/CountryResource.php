<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\Resource;

class CountryResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return // parent::toArray($request);
            [
                'country_id'=> $this->id,
                'name'=> $this->name,
                'country_code'=> $this->country_code,
                'iso_code' => $this->iso_code,
                'business_status' => $this->business_status
            ];
    }
}
