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
            'cv' => $this->cv,
            'logo' => $this->logo,
            'admin_id' => $this->admin_id,
            'country_id' => $this->country_id,
            'city_id' => $this->city_id,
            'number_of_leiter_reports' => $this->number_of_leiter_reports,
            'used_leiter_reports' => $this->used_leiter_reports,
            'number_of_abas_reports' => $this->number_of_abas_reports,
            'used_abas_reports' => $this->used_abas_reports,
            'number_of_casd_reports' => $this->number_of_casd_reports,
            'used_casd_reports' => $this->used_casd_reports,
            'number_of_mpr_reports' => $this->number_of_mpr_reports,
            'used_mpr_reports' => $this->used_mpr_reports,
            'role' => $this->role,
            'is_active' => $this->is_active,
            'gender' => $this->gender,
            'locale' => $this->locale,
            'expiration_date' => $this->expiration_date,
        ];
    }
}
