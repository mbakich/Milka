<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReceiptResource extends JsonResource
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
            'userId' => $this->userId,
            'number' => $this->number,
            'pointsAwarded' => $this->pointsAwarded,
            'status' => $this->status,
            'created_at' => $this->submissionDate->format('Y-m-d'),
            'updated_at' => $this->processingDate->format('Y-m-d'),
        ];
    }
}
