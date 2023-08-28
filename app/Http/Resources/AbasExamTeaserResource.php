<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AbasExamTeaserResource extends JsonResource
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
            'application_date' => $this->application_date,
            'age' => $this->age,
            'examiner' => new ExaminerResource($this->examiner),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
