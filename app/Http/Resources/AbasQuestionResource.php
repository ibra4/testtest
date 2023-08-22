<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AbasQuestionResource extends JsonResource
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
            'created_at' => $this->created_at,
            'sub_domain_name' => $this->subDomain->detailed_name,
        ];
    }
}
