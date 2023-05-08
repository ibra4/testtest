<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReportResource extends JsonResource
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
            'examinee' => new ExamineeResource($this->examinee),
            'reports' => [
                'cognitive' => $this->reportCognitive,
                'memory' => $this->reportMemory,
                'attention' => $this->reportAttention,
                'supplemental_attention' => $this->reportSupplementalAttention,
                'examiner' => $this->reportExaminer,
                'narrative' => $this->reportNarrative,
            ],
            'file_en' => route('reports.first', ['id' => $this->examinee->id]),
            'file_ar' => route('reports.first', ['id' => $this->examinee->id]),
        ];
    }
}
