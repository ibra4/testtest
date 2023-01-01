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

        $reportCognitive = $this->reportCognitive;
        $reportMemory = $this->reportMemory;
        $reportAttention = $this->reportAttention;
        $reportExaminer = $this->reportExaminer;
        $reportNarrative = $this->reportNarrative;

        $reportCognitive->file_en = route('reports.first', ['id' => $this->examinee->id]);
        $reportMemory->file_en = route('reports.first', ['id' => $this->examinee->id]);
        $reportAttention->file_en = route('reports.first', ['id' => $this->examinee->id]);
        $reportExaminer->file_en = route('reports.first', ['id' => $this->examinee->id]);
        $reportNarrative->file_en = route('reports.first', ['id' => $this->examinee->id]);
        $reportCognitive->file_ar = route('reports.first', ['id' => $this->examinee->id]);
        $reportMemory->file_ar = route('reports.first', ['id' => $this->examinee->id]);
        $reportAttention->file_ar = route('reports.first', ['id' => $this->examinee->id]);
        $reportExaminer->file_ar = route('reports.first', ['id' => $this->examinee->id]);
        $reportNarrative->file_ar = route('reports.first', ['id' => $this->examinee->id]);

        return [
            'id' => $this->id,
            'examinee' => new ExamineeResource($this->examinee),
            'reports' => [
                'cognitive' => $reportCognitive,
                'memory' => $reportMemory,
                'attention' => $reportAttention,
                'examiner' => $reportExaminer,
                'narrative' => $reportNarrative,
            ]
        ];
    }
}
