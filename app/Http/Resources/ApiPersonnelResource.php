<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApiPersonnelResource extends JsonResource
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
            "id" => $this->id,
            "email" => $this->email,
            "name" => $this->name,
            "age" => $this->age,
            "experience" => $this->experience,
            "aweragewage" => $this->aweragewage,
            "image_path" => $this->image_path,
            "created_at" => $this->created_at,
        ];
    }
}
