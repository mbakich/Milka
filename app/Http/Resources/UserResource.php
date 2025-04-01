<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'city' => $this->city,
            'address' => $this->address,
            'phoneNumber' => $this->phoneNumber,
            'idNumber' => $this->idNumber,
            'country' => $this->country,
            'currentPoints' => $this->currentPoints,
            'redeemedPoints' => $this->redeemedPoints,
            'created_at' => $this->created_at->format('Y-m-d'),
            'updated_at' => $this->updated_at->format('Y-m-d'),
        ];
    }
}
