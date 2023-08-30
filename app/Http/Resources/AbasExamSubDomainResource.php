<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AbasExamSubDomainResource extends JsonResource
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
            'title' => $this->subDomain->name,
            'description' => $this->subDomain->description,
            'is_saved' => $this->is_saved,
            'questions' => AbasSubDomainQuestionResource::collection($this->questions)
        ];
    }
}
