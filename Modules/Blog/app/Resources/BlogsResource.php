<?php

namespace Modules\Blog\app\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'blog' => $this->blog,
            'date' => $this->created_at->diffForHumans(),
        ];
    }
}
