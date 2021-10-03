<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReportResource extends JsonResource
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
            'number' => $this->id,
            'end_at' => $this->end_at,
            'price' => $this->price,
            'orders_count' => $this->orders_count,
            'mechanic' => $this->mechanic,
        ];
    }
}
// MechanicResource::collection($this->mechanic),