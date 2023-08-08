<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeiterReportResource extends JsonResource
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
            'formated_age' => $this->formated_age,
            // 'examiner' => new ExaminerResource($this->examiner),
            'examinee' => new ExamineeResource($this->examinee),
            'reports' => [
                'cognitive' => $this->reportCognitive,
                'memory' => $this->reportMemory,
                'attention' => $this->reportAttention,
                'supplemental_attention' => $this->reportSupplementalAttention,
                'examiner' => $this->reportExaminer,
                'narrative' => $this->reportNarrative,
            ],
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'file_en' => route('reports.first', ['id' => $this->examinee->id, 'lang' => 'en']),
            'file_ar' => route('reports.first', ['id' => $this->examinee->id, 'lang' => 'ar']),
            'file_normal_dist_en' => route('reports.second', ['id' => $this->examinee->id, 'lang' => 'en']),
            'file_normal_dist_ar' => route('reports.second', ['id' => $this->examinee->id, 'lang' => 'ar'])
        ];
    }
}
