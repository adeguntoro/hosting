<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Post extends JsonResource {

    public function toArray($request)
    {
        return [
            'post_id' => $this->id,
            'title' => $this->judul,
            'post_content' => $this->isi,
            'post_created' => $this->created_at,
        ];
    }
}
