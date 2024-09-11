<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return [
            "id" => $this->id,
            "name"   => $this->name,
            "logo" => asset(Storage::url($this->logo)),
            "address" => $this->address,
            "contact_1" => $this->contact_1,
            "contact_2" => $this->contact_2,
            "email" => $this->email,
            "facebook" => $this->facebook,
            "LinkedIn" => $this->linkedin,
            "Instagram" => $this->Instagram,
            "map" => $this->map,

        ];
    }
}
