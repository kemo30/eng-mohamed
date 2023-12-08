<?php

namespace Modules\Blog\app\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogCommentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array
    {
        return [
            'id'=> $this->id,
            'comment' => $this->comment,
            'likes_count' => $this->likes->count(),
            'time' =>  $this->created_at->diffForHumans(),
            'replays' => BlogCommentsRepaysResource::collection($this->comments),
        ];
    }
}
