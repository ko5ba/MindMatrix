<?php

namespace App\Http\Resources\News;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsIndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'category' => [
                'title' => $this->category->title
            ],
            'created_at' => $this->created_at->format('Y-m-d H:i'),
            'updated_at' => $this->created_at === $this->updated ? null : Carbon::parse($this->updated_at)->format('Y-m-d H:i')
        ];
    }
}
