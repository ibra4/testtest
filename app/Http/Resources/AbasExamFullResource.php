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
            'introduction' => setting('abas_introduction'),
            'application_date' => $this->application_date,
            'category' => __($this->category),
            'age' => $this->age,
            'translated_age' => $this->translated_age,
            'center' => new ExaminerResource($this->examinee->center),
            'examiner' => new ExaminerResource($this->examiner),
            'examiner_notes' => $this->examiner_notes,
            'examinee' => new ExamineeResource($this->examinee),
            'sub_domains' => AbasExamSubDomainResource::collection($this->subDomains),
            'file_en' => route('abas_report.main', ['id' => $this->id, 'lang' => 'en']),
            'file_ar' => route('abas_report.main', ['id' => $this->id, 'lang' => 'ar']),
            'file_charts_en' => route('abas_report.main2', ['id' => $this->id, 'lang' => 'en']),
            'file_charts_ar' => route('abas_report.main2', ['id' => $this->id, 'lang' => 'ar']),
        ];
    }
}
