<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AbasSubDomainResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'name_en' => $this->name_en,
            'for' => $this->for,
            'min_age' => $this->min_age,
            'max_age' => $this->max_age,
            'created_at' => $this->created_at,
            'domain_name' => $this->domain->name,
        ];
    }
}
