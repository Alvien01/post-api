<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostDetailResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'news_content' => $this->news_content,
            'category' => $this->category,
            'author' => $this->author,
            'writer' => $this->writer,
            'created_at' => optional($this->created_at)->format("Y/m/d H:i:s"),
            'updated_at' => optional($this->updated_at)->format("Y/m/d H:i:s"),
            'deleted_at' => $this->deleted_at 
        ];
    }
}
