<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class CountryResource extends JsonResource
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
            "image" => asset(Storage::url($this->image)),
            "continent" => $this->continent,
            "description" => $this->description,
            // "officaillangauge" => $this->officaillangauge,
            "currency" => $this->currency,
            "time_zone" => $this->time_zone,
            "visa_requirements" => $this->visa_requirements,
            "notes" => $this->notes,
            // "map" => $this->map,

        ];
    }
}
