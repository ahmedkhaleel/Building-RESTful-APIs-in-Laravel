<?php

namespace App\Http\Resources;

use App\Models\Author;
use App\Models\Petition;
use Illuminate\Http\Resources\Json\JsonResource;

class PetitionResource extends JsonResource
{
    public function toArray($request)
    {
        /**
         * @var Petition $petition
         * @var Author $author
         * @var Petition $petitionResource
         * @var Author $authorResource
         */
        return  [
            'id' => $this->id,
            'title' => ucwords($this->title,),
            'description' => $this->description,
            'category' => $this->category,
            'author' => $this->author,
            'signees' => $this->signees,
        ];
    }
}
