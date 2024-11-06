<?php

namespace App\Http\Resources\News;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsShowResource extends JsonResource
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
            'content' => $this->content,
            'category' => [
                'title' => $this->category->title
            ],
            'path_images' => $this->images->map(fn($image) => $image->path_image), // map - перебирает все связанные изображения в коллекции $this->images и выводит их в массив
            'created_at' => $this->created_at->format('Y-m-d H:i'),
            'updated_at' => $this->updated_at === $this->created_at ? null : $this->updated_at->format('Y-m-d H:i')
        ];
    }
}
