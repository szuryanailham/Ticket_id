<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
class TicketCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title'=>$this->title,
            'Slug'=>$this->Slug,
            'artist'=>$this->artist,
            'vanue'=>$this->vanue,
            'date_time'=>$this->artist,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
