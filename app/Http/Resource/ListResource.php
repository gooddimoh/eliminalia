<?php
namespace App\Http\Controllers;

use Illuminate\Http\Resources\Json\JsonResource;

class ListResource extends JsonResource
{
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
