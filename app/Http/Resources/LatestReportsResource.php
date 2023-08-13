<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LatestReportsResource extends JsonResource
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
            'examinee_name' => $this->examinee ? $this->examinee->name : 'Not found',
            'examinee_id' => $this->examinee ? $this->examinee->id : '',
            'center' => new ExaminerResource($this->examinee->center),
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s')
        ];
    }
}
