<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name' => $this->name,
            'phone_number' => $this->phone_number ?? "",
            'email' => $this->email,
            'avatar' => $this->avatar,
            'admin_id' => $this->admin_id,
            'country_id' => $this->country_id,
            'city_id' => $this->city_id,
            'number_of_reports' => $this->number_of_reports,
            'role' => $this->role,
            'is_active' => $this->is_active,
        ];
    }
}
