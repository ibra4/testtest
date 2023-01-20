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
        if (!$this->examinee) {
            $stop = $this->id;
        }
        
        $examinee = $this->examinee;
        $examinee = $this->examinee->examiner;
        return [
            'id' => $this->id,
            'examinee_name' => $this->examinee->name,
            'examinee_id' => $this->examinee->id,
            'examiner' => [
                'name' => $this->examinee->examiner->name,
                'avatar' => $this->examinee->examiner->avatar
            ],
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s')
        ];
    }
}
