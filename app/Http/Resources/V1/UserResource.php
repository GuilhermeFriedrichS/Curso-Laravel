<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class userResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [//altera os campos que vão ser retornados, o $this retorna os campos da model que chamou o Resource
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'fullName' => $this->firstName . ' '. $this->lastName,
            'email' => $this->email
        ];
    }
}
