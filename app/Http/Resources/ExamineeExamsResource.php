<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExamineeExamsResource extends JsonResource
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
            'examinee' => [
                'id' => $this->id,
                'name' => $this->name,
                'age' => $this->age,
                'birthday' => $this->birthday,
                'admin_id' => $this->admin_id,
                'country_id' => $this->country_id,
                'city_id' => $this->city_id,
                'gender' => $this->getRawOriginal('gender'),
                'examiner_notes' => $this->examiner_notes,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ],
            'leiter' => LeiterReportResource::collection($this->leiterReports),
        ];
    }
}
