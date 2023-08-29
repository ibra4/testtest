<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AbasExamFullResource extends JsonResource
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
            'translated_age' => $this->translated_age,
            'examiner' => new ExaminerResource($this->examinee->center),
            'examiner_notes' => $this->examiner_notes,
            'examinee' => new ExamineeResource($this->examinee),
        ];
    }
}
