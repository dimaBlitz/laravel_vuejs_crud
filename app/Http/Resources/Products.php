<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Products extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        // return [Product::with('category')->get()];
          return [
            'id'=>$this->id,
            'name'=>$this->name,
            'description'=>$this->description,
            'category_id'=>$this->category
        ];
    }
}
