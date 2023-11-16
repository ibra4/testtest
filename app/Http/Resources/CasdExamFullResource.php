<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CasdExamFullResource extends JsonResource
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
            'center' => new ExaminerResource($this->examinee->center),
            'examiner' => new ExaminerResource($this->examiner),
            'examiner_notes' => $this->examiner_notes,
            'examinee' => new ExamineeResource($this->examinee),
            'is_saved' => $this->is_saved,
            'sub_domains' => CasdExamSubDomainResource::collection($this->subDomains),
            'file_en' => route('casd_report.main', ['id' => $this->id, 'lang' => 'en']),
            'file_ar' => route('casd_report.main', ['id' => $this->id, 'lang' => 'ar']),
            'file_charts_en' => route('casd_report.main2', ['id' => $this->id, 'lang' => 'en']),
            'file_charts_ar' => route('casd_report.main2', ['id' => $this->id, 'lang' => 'ar']),
        ];
    }
}
